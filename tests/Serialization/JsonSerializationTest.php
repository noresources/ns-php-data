<?php
/**
 * Copyright © 2021 by Renaud Guillard (dev@nore.fr)
 * Distributed under the terms of the MIT License, see LICENSE
 *
 * #package Data
 */
namespace NoreSources\Data\TestCase\Serialization;

use NoreSources\Data\Serialization\DataSerializerInterface;
use NoreSources\Data\Serialization\DataUnserializerInterface;
use NoreSources\Data\Serialization\FileSerializerInterface;
use NoreSources\Data\Serialization\FileUnserializerInterface;
use NoreSources\Data\Serialization\JsonSerializer;
use NoreSources\Data\Serialization\StreamSerializerInterface;
use NoreSources\Data\Serialization\StreamUnserializerInterface;
use NoreSources\Data\Utility\FileExtensionListInterface;
use NoreSources\Data\Utility\MediaTypeListInterface;
use NoreSources\MediaType\MediaTypeFactory;

final class JsonSerializationTest extends SerializerTestCaseBase
{

	const CLASS_NAME = JsonSerializer::class;

	const MEDIA_TYPE = 'application/json';

	public function testImplements()
	{
		$serializer = $this->createSerializer();
		$this->assertImplements(
			[
				// Helpers
				MediaTypeListInterface::class,
				FileExtensionListInterface::class,
				// Stream interfaces
				StreamSerializerInterface::class,
				StreamUnserializerInterface::class,
				// Data interfaces
				DataSerializerInterface::class,
				DataUnserializerInterface::class,
				// File interface
				FileSerializerInterface::class,
				FileUnserializerInterface::class
			], $serializer);
	}

	public function testPOD()
	{
		if (!$this->canTestSerializer())
			return;

		$tests = [
			'auto' => [],
			'force mediatype' => [
				'mediaType' => self::MEDIA_TYPE
			],
			'force mediatype with a structured syntax' => [
				'mediaType' => 'application/vnd.ns.php.data+json'
			],
			'bad mediatype' => [
				'mediaType' => 'application/yaml',
				'canUnserialize' => false
			]
		];

		foreach ([
			'string',
			'integer',
			'float',
			'boolean'
		] as $typename)
		{
			foreach ($tests as $options)
			{
				$this->assertTypeSerialization($typename, $options);
			}
		}
	}

	public function testCanUnserializeFile()
	{
		$supported = JsonSerializer::prerequisites();
		if (!$supported)
			return $this->assertFalse($supported, 'Not supported');

		$serializer = new JsonSerializer();
		$tests = [
			'by extension' => [
				'arguments' => [
					'foo.json'
				],
				'expected' => true
			],
			'by media type' => [
				'arguments' => [
					null,
					MediaTypeFactory::getInstance()->createFromString(
						'application/json')
				],
				'expected' => true
			]
		];

		foreach ($tests as $label => $test)
		{
			$args = $test['arguments'];
			$expected = $test['expected'];
			$actual = \call_user_func_array(
				[
					$serializer,
					'canUnserializeFromFile'
				], $args);
			$this->assertEquals($expected, $actual, $label);
		}
	}
}