<?php

namespace Alerrandro\century;

use Alerrandro\century\helpers\Helper;
use Alerrandro\century\interface\Century;

class ReturnCentury implements Century
{
    use Helper;

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
