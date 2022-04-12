<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GuideAdminController extends AbstractController
{
    /**
     * @Route("/guide/admin", name="app_guide_admin")
     */
    public function index(): Response
    {
        return $this->render('guide_admin/index.html.twig', [
            'controller_name' => 'GuideAdminController',
        ]);
    }
}
