<?php

class RomanNumerals {

    public function generateNumber($number) {

        $legend = [
            "70" => "LXX",
            "60" => "LX",
            "50" => "L",
            "40" => "XL",
            "30" => "XXX",
            "25" => "XV",
            "24" => "XIV",
            "20" => "XX",
            "19" => "XIX",
            "15" => "XV",
            "14" => "XIV",
            "10" => "X",
            "9" => "IX",
            "5" => "V",
            "4" => "IV",
            "1" => "I"
        ];

        $result = '';

        foreach($legend as $arabic => $roman)
        {
            while($number >= $arabic){

                $result .= $roman;
                $number -= $arabic;
            }
        }

        return $result;
    }

}