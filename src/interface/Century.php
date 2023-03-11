<?php

namespace Alerrandro\century\interface;

interface Century
{
    static function century(string $year);
    static function centuryNow();
}
