<?php

class RomanNumber
{
    public function convertToRomanNumber($number)
    {
    	$result = '';
        
        if($number >= 10){
            $number = $number/10;
            return $result .= str_repeat("X",$number);
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
			$result .= str_repeat("I",$number);
     	}

        return $result ;
    }
}

?>