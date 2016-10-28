<?php

class RomanNumber
{
    private $valueRomanNumber = ['L','XL','X','V','IV','I'];
    public function convertToRomanNumber($number)
    {
    	$result = '';
        if($number >= 10){
          $number = $number/10;
          if($number >= 5){ 
            $number = $number-5;
            $result = $this->printToRomanNumeral(1,0);
          }
          if($number == 4){
            $result = $this->printToRomanNumeral(1,1);
          }
          if($number < 4){ 
            $result .= $this->printToRomanNumeral($number,2);
          }
          return $result;
        }
        if($number == 9){
            $result = 'IX'; 
        }
        if($number >= 5 && $number < 9){ 
     		$number = $number - 5; 
     		$result = $this->printToRomanNumeral(1,3);
     	}
     	if($number == 4) {
     		$result = $this->printToRomanNumeral(1,4);
     	}
     	if($number < 4) {
			$result .= $this->printToRomanNumeral($number,5);
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