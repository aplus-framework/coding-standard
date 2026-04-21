<?php declare(strict_types=1);
/*
 * This file is part of Aplus Framework Coding Standard Library.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\CodingStandard\Templates;

use Closure;

class Foo
{
    public function foo(?string $foo) : ?string
    {
        return $foo;
    }

    public function bar(Closure $bar) : Closure
    {
        return $bar;
    }

    public function testClosure() : void
    {
        $this->bar(static function () : string {
            return 'Hello!';
        });
    }

    public function testAnonymousClass() : void
    {
        $class = new class() extends Foo
        {
            public function ok() : void
            {
            }
        };
        $class->ok();
    }
}
