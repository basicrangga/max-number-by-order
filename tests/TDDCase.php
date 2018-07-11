<?php

require 'lib/MaxNumber.php';

class TDDCase extends PHPUnit_Framework_TestCase
{
	protected $maxNumber;
	protected $initCalculate = [2,1,6,9,9,4,3];
	protected $initCalculateResult = 6;

	public function setUp(){
		$this->maxNumber = new MaxNumber();
	}

	public function testCalculate(){
		$result = $this->maxNumber->calculate($this->initCalculate,1);
		$this->assertEquals($this->initCalculateResult,$result);
	}
}