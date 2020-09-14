<?php namespace Tests\CodingStandard;

use Framework\CodingStandard\Config;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
	protected Config $config;

	public function setup() : void
	{
		$this->config = new Config();
	}

	public function testCustomRules()
	{
		$this->assertContainsEquals(
			['array_indentation' => false],
			$this->config->getRules()
		);
	}

	public function testHeaderComment()
	{
		$this->assertTrue(
			empty($this->config->getRules()['header_comment']['header'])
		);
		$this->config->setHeaderComment('ABC');
		$this->assertEquals(
			'ABC',
			$this->config->getRules()['header_comment']['header']
		);
	}

	public function testDefaultHeaderComment()
	{
		$this->assertTrue(
			empty($this->config->getRules()['header_comment'])
		);
		$this->config->setDefaultHeaderComment();
		$this->assertFalse(
			empty($this->config->getRules()['header_comment'])
		);
	}
}
