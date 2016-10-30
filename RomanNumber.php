<?php

class RomanNumber
{
    private $valueRomanNumber = ['M','CM','D','CD','C','XC','L','XL','X','IX','V','IV','I'];
    private $arrabic = [1000,900,500,400,100,90,50,40,10,9,5,4,1];

    public function convertToRomanNumber($number)
    {
        $result = '';
        foreach ($this->arrabic as $value) {
            if($number%$value == 0){
                $number = $number/$value;
                if($number >= 5){
                    $number = $number-5;
                    $result .= $this->printToRomanNumeral(1,array_search($value,$this->arrabic)-2);
                }
                $result .= $this->printToRomanNumeral($number,array_search($value,$this->arrabic));
                break;
            }
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