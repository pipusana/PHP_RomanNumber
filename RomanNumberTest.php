<?php

require_once 'RomanNumber.php';

class RomanNumberTest extends PHPUnit_Framework_TestCase
{
	 public function setUp()
	 {
         $this->romannumber = new RomanNumber();
	 }

	 public function test_put_number_one_should_be_return_I()
	 {
	 	  $this->assertEquals('I',$this->romannumber->convertToRomanNumber(1));
	 }

	 public function test_put_number_two_should_be_return_II()
	 {
	 	  $this->assertEquals('II',$this->romannumber->convertToRomanNumber(2));
	 }

	 public function test_put_number_three_should_be_return_III()
	 {
	 	  $this->assertEquals('III',$this->romannumber->convertToRomanNumber(3));
	 }

	 public function test_put_number_four_should_be_return_IV()
	 {
	 	  $this->assertEquals('IV',$this->romannumber->convertToRomanNumber(4));
	 }

	 public function test_put_number_five_should_be_return_V()
	 {
	 	  $this->assertEquals('V',$this->romannumber->convertToRomanNumber(5));
	 } 

     public function test_put_number_six_should_be_return_VI()
	 {
	 	  $this->assertEquals('VI',$this->romannumber->convertToRomanNumber(6));
	 }

	 public function test_put_number_nine_shoul_be_return_IX()
	 {
	 	  $this->assertEquals('IX',$this->romannumber->convertToRomanNumber(9));
	 }

	 public function test_put_number_ten_shoul_be_return_X()
	 {
	 	  $this->assertEquals('X',$this->romannumber->convertToRomanNumber(10));
	 }

}

?>