<?php

class RomanNumber
{
    $valueRomanNumber = ['I','X'];
    public function convertToRomanNumber($number)
    {
    	$result = '';
        if($number >= 10){
          $number = $number/10;
          return $this->printToRomanNumeral_I_X($number,1);
        }
        if($number == 9) {
            $result = 'IX'; 
        }
        if($number >= 5 && $number < 9) { 
     		$number = $number - 5; 
     		$result = 'V';
     	}
     	if($number == 4) {
     		$result = 'IV';
     	}
     	if($number < 4){
			$result .= $this->printToRomanNumeral_I_X($number,0);
     	}

        return $result ;
    }

    public function printToRomanNumeral_I_X($number,$index)
    {
        $result = '';
        return $result .= str_repeat($this->valueRomanNumber[$index],$number);
    }
}

?>