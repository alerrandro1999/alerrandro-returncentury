<?php

namespace Alerrandro\century;

class ReturnCentury
{
    public static function returnLenght($ano)
    {
        return strlen($ano);
    }

    public static function lastTwoWithThreeHouses($ano)
    {
        return substr($ano, 1, 2);
    }

    public static function lastTwoWithFourHouses($ano)
    {
        return substr($ano, 2, 2);
    }

    public static function lastTwo($ano)
    {
        return substr($ano, 0, -2);
    }

    public static function century(string $ano)
    {
        if (self::returnLenght($ano) == 3 && self::lastTwoWithThreeHouses($ano) == 00) {
            echo self::lastTwo($ano);
        } elseif (self::returnLenght($ano) == 4 && self::lastTwoWithFourHouses($ano) == 00) {
            echo self::lastTwo($ano);
        } elseif (self::returnLenght($ano) >= 3) {
            echo self::lastTwo($ano) + 1;
        } else {
            echo 1;
        }
    }
}
