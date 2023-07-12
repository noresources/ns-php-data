<?php

/**
 * Copyright © 2023 by Renaud Guillard (dev@nore.fr)
 * Distributed under the terms of the MIT License, see LICENSE
 *
 * @package Data
 */
namespace NoreSources\Data\Parser;

use NoreSources\Container\Container;

/**
 * INI content parser
 */
class IniParser
{

	/**
	 * Key-value lines MAY be indented
	 *
	 * @var number
	 */
	const KEY_VALUE_INDENTED = 0x01;

	/**
	 * A line starting with at least one linear whitespace will be considered as th next line of the
	 * current value
	 *
	 * This flag is incompatible with VALUE_UNQUOTED_MULTILINE
	 *
	 * This flag is incompatible with KEY_VALUE_INDENTED
	 *
	 * @var number
	 */
	const VALUE_UNQUOTED_MULTILINE = 0x02;

	/**
	 * A backslash character '\' at the end of a unquoted value indicates the line content continues
	 * on the netxt line
	 *
	 * @var number
	 */
	const VALUE_UNQUOTED_BACKSLASH_CONTINUE = 0x04;

	public function __construct()
	{
		$this->initialize();
	}

	/**
	 * Alias of parse()
	 *
	 * @param string $text
	 *        	INI file content.
	 * @param number $flags
	 *        	Parser flages.
	 * @return boolean|array
	 */
	public function __invoke($text, $flags = 0)
	{
		return $this->parse($text, $flags);
	}

	/**
	 * Parse INI file content.
	 *
	 * @param string $text
	 *        	INI file content.
	 * @param number $flags
	 *        	Parser flags.
	 * @return boolean|array
	 */
	public function parse($text, $flags = 0)
	{
		$this->initialize($flags);
		while (\strlen($text))
		{
			$line = '';
			$eol = '';
			$this->extractLine($line, $eol, $text);
			$this->parseLine($text, $eol);
			$text = \substr($text, \strlen($line) + \strlen($eol));
		}
		return $this->finalize();
	}

	/**
	 * Initialize / reset parser
	 *
	 * @param number $flags
	 *        	Parser flags
	 */
	public function initialize($flags = 0)
	{
		$this->flags = $flags;
		$this->section = $this->quote = $this->continue = $this->key = $this->value = $this->data = false;
		$this->lineNumber = 0;
	}

	/**
	 * Parse a INI file content line
	 *
	 * @param string $text
	 *        	INI file content line.
	 * @throws ParserException
	 * @return boolean TRUE
	 */
	public function parseLine($text)
	{
		$this->lineNumber++;
		$ltrim = \ltrim($text, "\t ");

		if ($this->quote || $this->continue)
		{
			return $this->readValue($this->quote ? $text : $ltrim);
		}

		if ($ltrim != $text)
		{
			$f = self::VALUE_UNQUOTED_MULTILINE;
			if (($this->flags & $f) == $f && $this->key !== false &&
				$this->value !== false)
			{
				return $this->readValue($ltrim);
			}

			if (empty($text) || $this->isBlankLine($text))
				return true;

			$f = self::KEY_VALUE_INDENTED;
			if ((($this->flags & $f) == $f))
			{
				$this->finalizeEntry();
				return $this->readKeyValue($ltrim);
			}

			throw new ParserException('Unexpected white spaces',
				$this->lineNumber);
		}

		if (empty($text))
			return true;

		if ($text[0] == '[')
		{
			$this->finalizeEntry();
			return $this->readSection($text);
		}

		$this->finalizeEntry();

		if ($this->isBlankLine($text))
			return true;

		return $this->readKeyValue($text);
	}

	/**
	 * Finalize line parsing.
	 *
	 * @return boolean|array Key-value dictionary
	 */
	public function finalize()
	{
		$this->finalizeEntry();
		return $this->data;
	}

	protected function readSection($text)
	{
		if (!\preg_match('/^\[(.+?)\][ \t]*$/', \trim($text), $m))
			throw new ParserException('Invalid section pattern',
				$this->lineNumber);
		$this->section = $m[1];
		if (!$this->data)
			$this->data = [];
		if (!Container::keyExists($this->data, $this->section))
			$this->data[$this->section] = [];
		$this->key = $this->value = $this->quote = false;
		return true;
	}

	protected function readKeyValue($text)
	{
		$parts = \explode('=', $text, 2);

		if (\count($parts) < 2)
			throw new ParserException('Invalid key pattern',
				$this->lineNumber);
		$this->key = $parts[0];
		return $this->readValue(\ltrim($parts[1]));
	}

	protected function readValue($text)
	{
		if ($this->value === false)
			$this->value = '';
		elseif (!$this->continue)
			$this->value .= PHP_EOL;
		$this->continue = false;
		$this->continue = false;

		$length = \strlen($text);
		for ($i = 0; $i < $length; $i++)
		{
			$c = $text[$i];

			if ($this->quote === $c)
			{
				$this->quote = false;
				continue;
			}

			if ($this->quote)
			{
				$this->value .= $c;
				continue;
			}

			if ($c == '"' || $c == "'")
			{
				$this->quote = $c;
				continue;
			}

			$this->value .= $c;
		}

		if (!$this->quote)
		{
			$f = self::VALUE_UNQUOTED_BACKSLASH_CONTINUE;
			if (($this->flags & $f) == $f)
			{
				$length = \strlen($this->value);
				if ($this->value[$length - 1] == '\\')
				{
					$this->value = \substr($this->value, 0, $length - 1);

					$this->continue = true;
				}
			}
		}

		return true;
	}

	protected function finalizeEntry()
	{
		if ($this->key === false)
			return true;

		if ($this->data === false)
			$this->data = [];
		if ($this->section)
		{
			if (!Container::keyExists($this->data, $this->section))
				$this->data[$this->section] = [];
			$this->data[$this->section][$this->key] = $this->value;
		}
		else
		{
			$this->data[$this->key] = $this->value;
		}

		$this->key = $this->value = $this->quote = $this->continue = false;
		return true;
	}

	private function extractLine(&$line, &$eol, $text)
	{
		$length = \strlen($text);
		$eol = '';
		foreach ([
			"\r\n",
			"\r",
			"\n"
		] as $needle)
		{
			$p = \strpos($needle, $text);
			if (\is_integer($p) && $p < $length)
			{
				$length = $p;
				$eol = $needle;
			}
		}
		$line = \substr($text, 0, $length);
	}

	private function isBlankLine($text)
	{
		return \preg_match('/^\s*$/', $text) != 0;
	}

	private $data = false;

	private $flags = 0;

	/**
	 *
	 * @var ParserContext
	 */
	public $lineNumber = 0;

	public $section = false;

	public $key = false;

	public $value = false;

	public $quote = false;

	public $continue = false;
}