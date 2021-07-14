<?php
/*
 * This file is part of Aplus Framework Coding Standard Library.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\CodingStandard;

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
        $this->assertFalse(
            isset($this->config->getRules()['header_comment'])
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
