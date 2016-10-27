<?php

class RomanNumber
{
     public function convertToRomanNumber($number)
     {
     	if($number == 4) {
     		return "IV";
     	} else if ($number == 5) {
     		return "V";
     	}

        return str_repeat("I",$number);
     	
     }

}

?>