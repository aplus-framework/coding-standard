<?php
/*
 * This file is part of The Framework Coding Standard Library.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\CodingStandard;

use Framework\CodingStandard\Finder;
use PHPUnit\Framework\TestCase;

class FinderTest extends TestCase
{
    public function testInstance() : void
    {
        $this->assertInstanceOf(Finder::class, Finder::create());
    }
}
