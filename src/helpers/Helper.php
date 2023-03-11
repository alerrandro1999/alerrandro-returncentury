<?php

namespace Alerrandro\century\helpers;

trait Helper
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
}
