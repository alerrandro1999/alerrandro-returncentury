<?php

namespace Alerrandro\century;

class ReturnCentury
{
    public static function returnLenght($ano) : string
    {
        return strlen($ano);
    }

    public static function lastTwoWithThreeHouses($ano) : string
    {
        return substr($ano, 1, 2);
    }

    public static function lastTwoWithFourHouses($ano) : string
    {
        return substr($ano, 2, 2);
    }

    public static function lastTwo($ano) : string
    {
        return substr($ano, 0, -2);
    }

    public static function century(string $ano) : string
    {
        if (self::returnLenght($ano) == 3 && self::lastTwoWithThreeHouses($ano) == 00) {
            return self::lastTwo($ano);
        } elseif (self::returnLenght($ano) == 4 && self::lastTwoWithFourHouses($ano) == 00) {
            return self::lastTwo($ano);
        } elseif (self::returnLenght($ano) >= 3) {
            return self::lastTwo($ano) + 1;
        } else {
            return 1;
        }
    }

    public static function centuryNow() : string
    {
        return self::century(date('Y'));
    }
}
