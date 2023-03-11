<?php

namespace Alerrandro\century;

use Alerrandro\century\interface\Century;

class ReturnCentury implements Century
{
    public static function returnLenght($year): string
    {
        return strlen($year);
    }

    public static function lastTwoWithThreeHouses($year): string
    {
        return substr($year, 1, 2);
    }

    public static function lastTwoWithFourHouses($year): string
    {
        return substr($year, 2, 2);
    }

    public static function lastTwo($year): string
    {
        return substr($year, 0, -2);
    }

    public static function century(string $year): string
    {
        if (self::returnLenght($year) == 3 && self::lastTwoWithThreeHouses($year) == 00) {
            return self::lastTwo($year);
        } elseif (self::returnLenght($year) == 4 && self::lastTwoWithFourHouses($year) == 00) {
            return self::lastTwo($year);
        } elseif (self::returnLenght($year) >= 3) {
            return self::lastTwo($year) + 1;
        } else {
            return 1;
        }
    }

    public static function centuryNow(): string
    {
        return self::century(date('Y'));
    }
}
