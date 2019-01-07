<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use phpDocumentor\Reflection\Types\Void_;

//./vendor/bin/phpunit --bootstrap /f/xampp/htdocs/InterviewPrep/vendor/autoload.php tests/InterviewTest.php


final class InterviewTest extends TestCase
{
	public function testAdd(): void
	{
		$this->assertEquals(5, Interview::add(1, 4));
	}

	public function testAdd2(): Void
	{
		$this->assertEquals(6, Interview::add(3, 3));
	}
	
}