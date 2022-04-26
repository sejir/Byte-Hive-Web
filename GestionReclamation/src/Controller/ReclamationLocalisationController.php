<?php

namespace App\Controller;

use App\Entity\ReclamationLocalisation;
use App\Form\ReclamationLocalisationType;
use App\Repository\ReclamationLocalisationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reclamation/localisation")
 */
class ReclamationLocalisationController extends AbstractController
{
    /**
     * @Route("/", name="app_reclamation_localisation_index", methods={"GET"})
     */
    public function index(ReclamationLocalisationRepository $reclamationLocalisationRepository): Response
    {
        return $this->render('reclamation_localisation/index.html.twig', [
            'reclamation_localisations' => $reclamationLocalisationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_reclamation_localisation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ReclamationLocalisationRepository $reclamationLocalisationRepository): Response
    {
        $reclamationLocalisation = new ReclamationLocalisation();
        $form = $this->createForm(ReclamationLocalisationType::class, $reclamationLocalisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationLocalisationRepository->add($reclamationLocalisation);
            return $this->redirectToRoute('app_reclamation_localisation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation_localisation/new.html.twig', [
            'reclamation_localisation' => $reclamationLocalisation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_reclamation_localisation_show", methods={"GET"})
     */
    public function show(ReclamationLocalisation $reclamationLocalisation): Response
    {
        return $this->render('reclamation_localisation/show.html.twig', [
            'reclamation_localisation' => $reclamationLocalisation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_reclamation_localisation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ReclamationLocalisation $reclamationLocalisation, ReclamationLocalisationRepository $reclamationLocalisationRepository): Response
    {
        $form = $this->createForm(ReclamationLocalisationType::class, $reclamationLocalisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationLocalisationRepository->add($reclamationLocalisation);
            return $this->redirectToRoute('app_reclamation_localisation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation_localisation/new.html.twig', [
            'reclamation_localisation' => $reclamationLocalisation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_reclamation_localisation_delete", methods={"POST"})
     */
    public function delete(Request $request, ReclamationLocalisation $reclamationLocalisation, ReclamationLocalisationRepository $reclamationLocalisationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamationLocalisation->getId(), $request->request->get('_token'))) {
            $reclamationLocalisationRepository->remove($reclamationLocalisation);
        }

        return $this->redirectToRoute('app_reclamation_localisation_index', [], Response::HTTP_SEE_OTHER);
    }
}
