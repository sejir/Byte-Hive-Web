<?php

namespace App\Controller;

use App\Entity\Upcomingevents;
use App\Form\UpcomingeventsType;
use App\Repository\UpcomingeventsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UpcomingeventsAdminController extends AbstractController
{
    /**
     * @Route("/admin/upcomingevents", name="app_upcomingevents_admin")
     */
    public function index(UpcomingeventsRepository $upcomingeventsRepository): Response
    {

        $list_commande = $upcomingeventsRepository->findAll();
        return $this->render('upcomingevents_admin/index.html.twig', [
            'upcomingevents'=> $list_commande,
        ]);

    }

}
