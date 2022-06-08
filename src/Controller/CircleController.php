<?php

namespace App\Controller;

use App\Service\GeoMetryCalculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CircleController extends AbstractController
{
    #[Route('/circle/{radius}', name: 'app_circle')]
    public function index(GeoMetryCalculator $geoMetryCalculator, int $radius): Response
    {
        $data = [
            'radius' => $radius
        ];

        $response = [
            'type' => 'circle',
            'radius' => $radius,
            'area' => $geoMetryCalculator->getArea($data, 'circle'),
            'diameter' => $geoMetryCalculator->getDiameter($data),
        ];

        return $this->json($response);
    }
}
