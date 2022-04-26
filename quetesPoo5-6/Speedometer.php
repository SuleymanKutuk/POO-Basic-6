<?php

class Speedometer{



    public const MILES =  0.62137119;
    public const KM =  1.609;

    public static function convertKm (int $currentSpeed) :float{

        
        return $currentSpeed * self::MILES;


    }



    public static function convertMl (int $currentSpeed) : float {


        return $currentSpeed * self::KM;

    }


}