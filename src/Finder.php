<?php declare(strict_types=1);
/*
 * This file is part of Aplus Framework Coding Standard Library.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Framework\CodingStandard;

/**
 * Class Finder.
 *
 * @package coding-standard
 */
class Finder extends \PhpCsFixer\Finder
{
    public function __construct()
    {
        parent::__construct();
        $this->exclude('build');
    }
}
