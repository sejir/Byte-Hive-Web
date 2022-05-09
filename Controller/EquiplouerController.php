<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquiplouerController extends AbstractController
{
    /**
     * @Route("/equiplouer", name="app_equiplouer")
     */
    public function index(): Response
    {
        return $this->render('equiplouer/index.html.twig', [
            'controller_name' => 'EquiplouerController',
        ]);
    }
}
