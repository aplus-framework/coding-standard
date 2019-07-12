<?php namespace Tests\Sample;

use Framework\CodingStandard\Config;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
	/**
	 * @var Config
	 */
	protected $config;

	public function setup() : void
	{
		$this->config = new Config();
	}

	public function testCustomRules()
	{
		$this->assertContains(
			['array_indentation' => false],
			$this->config->getRules()
		);
	}
}
