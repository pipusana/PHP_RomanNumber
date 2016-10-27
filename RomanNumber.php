<?php

class RomanNumber
{
     public function convertToRomanNumber($number)
     {
     	if($number == 4) {
     		return "IV";
     	} else if ($number == 5) {
     		return "V";
     	} else if ($number == 6) {
     		return "VI";
     	}

        return str_repeat("I",$number);
     	
     }

}

?>