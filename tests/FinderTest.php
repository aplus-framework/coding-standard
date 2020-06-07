<?php namespace Tests\CodingStandard;

use Framework\CodingStandard\Finder;
use PHPUnit\Framework\TestCase;

class FinderTest extends TestCase
{
	public function testInstance()
	{
		$this->assertInstanceOf(Finder::class, Finder::create());
	}
}
