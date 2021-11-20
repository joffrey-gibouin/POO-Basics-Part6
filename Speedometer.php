<?php

class Speedometer
{
    public const MILES = 0.621;
    public const KM = 1.61;

    public static function convertKmToMiles(int $km)
    {
        return $km * self::MILES;
    }
    public static function convertMilesToKm(int $miles)
    {
        return $miles * self::KM;
    }

}