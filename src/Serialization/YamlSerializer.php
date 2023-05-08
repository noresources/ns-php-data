<?php

/**
 * Copyright © 2021 by Renaud Guillard (dev@nore.fr)
 * Distributed under the terms of the MIT License, see LICENSE
 *
 * @package Data
 */
namespace NoreSources\Data\Serialization;

use NoreSources\MediaType\MediaTypeInterface;
use NoreSources\Data\Serialization\Traits\MediaTypeListTrait;
use NoreSources\MediaType\MediaTypeFactory;
use NoreSources\MediaType\MediaType;
use NoreSources\Data\Serialization\Traits\DataFileSerializerTrait;
use NoreSources\Data\Serialization\Traits\DataFileUnserializerTrait;
use NoreSources\MediaType\MediaTypeFileExtensionRegistry;
use NoreSources\Data\Serialization\Traits\DataFileExtensionTrait;

/**
 * YAML content and file (de)serialization.
 *
 * Require the yaml extension
 */
class YamlSerializer implements DataUnserializerInterface,
	DataSerializerInterface, DataFileSerializerInterface,
	DataFileUnerializerInterface
{
	use MediaTypeListTrait;
	use DataFileSerializerTrait;
	use DataFileUnserializerTrait;
	use DataFileExtensionTrait;

	public function __construct()
	{
		$this->setFileExtensions([
			'yaml',
			'yml'
		]);
	}

	public static function prerequisites()
	{
		return \extension_loaded('yaml');
	}

	public function getSerializableDataMediaTypes()
	{
		return $this->getMediaTypes();
	}

	public function canSerializeData($data,
		MediaTypeInterface $mediaType = null)
	{
		if ($mediaType)
			return $this->matchMediaType($mediaType);

		return true;
	}

	/**
	 * Indicates if the given file can be unserialized
	 *
	 * Since their is no reliable method to gen the correct media type of a YAML file,
	 * only the file extension is checked.
	 */
	public function canUnserializeFromFile($filename,
		MediaTypeInterface $mediaType = null)
	{
		if (\is_string($mediaType))
			$mediaType = MediaTypeFactory::createFromString($mediaType);
		if ($mediaType instanceof MediaTypeInterface)
		{
			$types = $this->getMediaTypes();
			foreach ($types as $type)
			{
				if ($type->match($mediaType))
					return true;
			}
		}

		$x = \pathinfo($filename, PATHINFO_EXTENSION);
		return \in_array($x, [
			'yaml',
			'yml'
		]);
	}

	public function getUnserializableDataMediaTypes()
	{
		return $this->getMediaTypes();
	}

	public function unserializeData($data,
		MediaTypeInterface $mediaType = null)
	{
		return \yaml_parse($data);
	}

	public function serializeData($data,
		MediaTypeInterface $mediaType = null)
	{
		$encoding = YAML_ANY_ENCODING;
		if ($mediaType &&
			$mediaType->getParameters()->offsetExists('charset'))
		{
			$charset = $mediaType->getParameters()->offsetGet('charset');
			if (\strcasecmp($charset, 'utf-8') == 0)
				$encoding = YAML_UTF8_ENCODING;
		}
		return \yaml_emit($data, $encoding);
	}

	public function canUnserializeData($data,
		MediaTypeInterface $mediaType = null)
	{
		if (!\is_string($data))
			return false;
		if ($mediaType)
			return $this->matchMediaType($mediaType);
		return true;
	}

	protected function matchMediaType(MediaTypeInterface $mediaType)
	{
		$types = $this->getMediaTypes();
		$s = \strval($mediaType);
		foreach ($types as $type)
		{
			if (\strcasecmp(\strval($type), $s) == 0)
				return true;
		}
		$syntax = $mediaType->getStructuredSyntax();
		return \is_string($syntax) && (\strcasecmp($syntax, 'yaml') == 0);
	}

	protected function buildMediaTypeList()
	{
		return [
			MediaTypeFactory::createFromString('text/x-yaml')
		];
	}
}
