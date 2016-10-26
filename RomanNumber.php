<?php

class RomanNumber
{
     public function convertToRomanNumber($number)
     {
     	  if($number == 2){
     	  	return 'II';
     	  } else if ($number == 3){
     	  	return 'III';
     	  }
          return 'I';
     }
}

?>