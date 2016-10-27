<?php

class RomanNumber
{
    public function convertToRomanNumber($number)
    {
    	$result = '';
     	if($number >= 5 ) { 
     		$number = $number - 5; 
     		$result = 'V';
     	}
     	if($number == 4) {
     		$result = "IV";
     	}
     	if($number < 4){
			$result .= str_repeat("I",$number);
     	}
     	
        return $result ;
     	
    }

}

?>