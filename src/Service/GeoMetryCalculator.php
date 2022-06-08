<?php

namespace App\Service;

class GeoMetryCalculator
{
    public function getArea($data, $type)
    {
        switch ($type) {
            case 'circle':
            default:

                // using formular: π× (radius)²
                $area =  M_PI * pow($data['radius'], 2);

                break;

            case 'triangle':
                $area = $data['a'] * $data['b'] * $data['c'];

                break;
        }

        return $area;
    }

    public function getDiameter($data)
    {
        // using formular: 2 x radius
        $result = 2 * $data['radius'];

        return $result;
    }
}
