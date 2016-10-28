<?php

class RomanNumber
{
    private $valueRomanNumber = ['XL','X','IV','I'];
    public function convertToRomanNumber($number)
    {
    	$result = '';
        if($number >= 10){
          $number = $number/10;
          if($number == 4) {
            $result = $this->printToRomanNumeral(1,0);;
          }
          if($number < 4){
            $result = $this->printToRomanNumeral($number,1);
          }
          return $result;
        }
        if($number == 9){
            $result = 'IX'; 
        }
        if($number >= 5 && $number < 9) { 
     		$number = $number - 5; 
     		$result = 'V';
     	}
     	if($number == 4) {
     		$result = $this->printToRomanNumeral(1,2);;
     	}
     	if($number < 4) {
			$result .= $this->printToRomanNumeral($number,3);
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