<?php

class RomanNumber
{
    private $valueRomanNumber = ['M','CM','D','CD','C','XC','L','XL','X','IX','V','IV','I'];
    private $arrabic = [1000,900,500,400,100,90,50,40,10,9,5,4,1];

    public function convertToRomanNumber($number)
    {
        $result = '';
        foreach ($this->arrabic as $key => $value) {
            $resultDevide = $number / $value;
            if($resultDevide > 0){
                $result .= $this->printToRomanNumeral($resultDevide,$key);
                $number = $number % $value;
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