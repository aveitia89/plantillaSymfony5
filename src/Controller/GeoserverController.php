<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GeoserverController extends AbstractController
{
    /**
     * @Route("/geoserver", name="geoserver")
     */
    public function index()
    {
        return $this->render('geoserver/index.html.twig', [
            'controller_name' => 'GeoserverController',
        ]);
    }
}
