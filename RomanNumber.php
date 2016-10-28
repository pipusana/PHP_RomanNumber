<?php

class RomanNumber
{
    private $valueRomanNumber = ['XC','L','XL','X','IX','V','IV','I'];
    private $arrabic = [50,40,10,9,5,4,1];
    public function convertToRomanNumber($number)
    {
    	$result = '';
        if($number >= 10){
          if($number == 90){
            $result = $this->printToRomanNumeral(1,0);
          }  
          if($number >= 50 && $number < 90){ 
            $number = $number-50;
            $result = $this->printToRomanNumeral(1,1);
          }
          if($number == 40){
            $result = $this->printToRomanNumeral(1,2);
          }
          if($number < 40){ 
            $result .= $this->printToRomanNumeral($number/10,3);
          }
          return $result;
        }
        if($number == 9){
            $result = $this->printToRomanNumeral(1,4);
        }
        if($number >= 5 && $number < 9){ 
     		$number = $number - 5; 
     		$result = $this->printToRomanNumeral(1,5);
     	}
     	if($number == 4) {
     		$result = $this->printToRomanNumeral(1,6);
     	}
     	if($number < 4) {
			$result .= $this->printToRomanNumeral($number,7);
     	}
        return $result;
    }

    public function printToRomanNumeral($number,$index)
    {
        $result = '';
        return $result .= str_repeat($this->valueRomanNumber[$index],$number);
    }
}

?>