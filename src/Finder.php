<?php namespace Framework\CodingStandard;

class Finder extends \PhpCsFixer\Finder
{
	public function __construct()
	{
		parent::__construct();
		$this->exclude('build');
	}
}
