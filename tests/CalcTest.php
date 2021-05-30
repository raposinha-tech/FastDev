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
	
	/**
	 * @test
	 *
	 */
	public function sub_is_correct()
	{
		$calc = new Calc();
		$expected = 2;
		$this->assertEquals($expected, $calc->sub(4, 2));
	}
	
	/**
	 * @test
	 *
	 */
	public function multiply_is_correct()
	{
		$calc = new Calc();
		$expected = 8;
		$this->assertEquals($expected, $calc->multiply(4, 2));
	}
}
