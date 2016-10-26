<?php

require_once 'RomanNumber.php';

class RomanNumberTest extends PHPUnit_Framework_TestCase
{
	 public function test_put_number_one_should_be_return_I()
	 {
	 	  $romannumber = new RomanNumber();
	 	  $this->assertEquals('I',$romannumber->convertToRomanNumber(1));
	 }

	 public function test_put_number_two_should_be_return_II()
	 {
	 	  $romannumber = new RomanNumber();
	 	  $this->assertEquals('II',$romannumber->convertToRomanNumber(2));
	 }
}

?>