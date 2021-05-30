<?php

namespace FastDevTest;

use FastDev\Calc;
use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase
{
	/**
	 * @test
	 *
	 */
	public function sum_is_correct()
	{
		$calc = new Calc();
		$expected = 4;
		$this->assertEquals($expected, $calc->sum(2, 2));
	}
}
