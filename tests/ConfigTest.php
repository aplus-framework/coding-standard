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

	public function testCustomRules() : void
	{
		$this->assertContainsEquals(
			['array_indentation' => false],
			$this->config->getRules()
		);
	}

	public function testHeaderComment() : void
	{
		$this->assertSame(
			'',
			$this->config->getRules()['header_comment']['header']
		);
		$this->config->setHeaderComment('ABC');
		$this->assertSame(
			'ABC',
			$this->config->getRules()['header_comment']['header']
		);
	}

	public function testDefaultHeaderComment() : void
	{
		$this->config->setDefaultHeaderComment('Foo Bar');
		$this->assertStringContainsString(
			'Foo Bar',
			$this->config->getRules()['header_comment']['header']
		);
	}
}
