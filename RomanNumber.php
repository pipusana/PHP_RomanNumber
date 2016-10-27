<?php

class RomanNumber
{
    public function convertToRomanNumber($number)
    {
     	if ($number >= 5) {
     		$result = "V".str_repeat("I",$number-5);
     	}
     	if($number == 4) {
     		$result = "IV";
     	}
     	if($number < 4){
			$result = str_repeat("I",$number);
     	}

        return $result ;
     	
    }

}

?>