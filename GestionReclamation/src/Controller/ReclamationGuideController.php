<?php

namespace App\Controller;

use App\Entity\ReclamationGuide;
use App\Form\ReclamationGuideType;
use App\Repository\ReclamationGuideRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reclamation/guide")
 */
class ReclamationGuideController extends AbstractController
{
    /**
     * @Route("/index", name="app_reclamation_guide_index", methods={"GET"})
     */
    public function index(ReclamationGuideRepository $reclamationGuideRepository): Response
    {
        return $this->render('reclamation_guide/index.html.twig', [
            'reclamation_guides' => $reclamationGuideRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_reclamation_guide_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ReclamationGuideRepository $reclamationGuideRepository): Response
    {
        $reclamationGuide = new ReclamationGuide();
        $form = $this->createForm(ReclamationGuideType::class, $reclamationGuide);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationGuideRepository->add($reclamationGuide);
            return $this->redirectToRoute('app_reclamation_guide_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation_guide/new.html.twig', [
            'reclamation_guide' => $reclamationGuide,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_reclamation_guide_show", methods={"GET"})
     */
    public function show(ReclamationGuide $reclamationGuide): Response
    {
        return $this->render('reclamation_guide/show.html.twig', [
            'reclamation_guide' => $reclamationGuide,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_reclamation_guide_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ReclamationGuide $reclamationGuide, ReclamationGuideRepository $reclamationGuideRepository): Response
    {
        $form = $this->createForm(ReclamationGuideType::class, $reclamationGuide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationGuideRepository->add($reclamationGuide);
            return $this->redirectToRoute('app_reclamation_guide_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation_guide/edit.html.twig', [
            'reclamation_guide' => $reclamationGuide,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_reclamation_guide_delete", methods={"POST"})
     */
    public function delete(Request $request, ReclamationGuide $reclamationGuide, ReclamationGuideRepository $reclamationGuideRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamationGuide->getId(), $request->request->get('_token'))) {
            $reclamationGuideRepository->remove($reclamationGuide);
        }

        return $this->redirectToRoute('app_reclamation_guide_index', [], Response::HTTP_SEE_OTHER);
    }
}
