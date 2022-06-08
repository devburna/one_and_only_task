<?php

namespace App\Controller;

use App\Service\GeoMetryCalculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TriangleController extends AbstractController
{
    #[Route('/triangle/{a}/{b}/{c}', name: 'app_triangle')]
    public function index(GeoMetryCalculator $geoMetryCalculator, $a, $b, $c): Response
    {
        $response = [
            'type' => 'triangle',
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'area' => $geoMetryCalculator->getArea([
                'a' => $a,
                'b' => $b,
                'c' => $c,
            ], 'triangle'),
        ];

        return $this->json($response);
    }
}
