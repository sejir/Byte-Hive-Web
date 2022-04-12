<?php

namespace App\Controller;

use App\Entity\Upcomingevents;
use App\Form\UpcomingeventsType;
use App\Repository\UpcomingeventsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/upcomingevents")
 */
class UpcomingeventsController extends AbstractController
{
    /**
     * @Route("/all", name="app_upcomingevents_index", methods={"GET"})
     */
    public function index(UpcomingeventsRepository $upcomingeventsRepository): Response
    {
        
        $list_commande = $upcomingeventsRepository->findAll();
        return $this->render('upcomingevents/index.html.twig', [
            'upcomingevents'=> $list_commande,
        ]);
        
    }

    /**
     * @Route("/new", name="app_upcomingevents_new", methods={"GET", "POST"})
     */
    public function new(Request $request, UpcomingeventsRepository $upcomingeventsRepository): Response
    {
        $upcomingevent = new Upcomingevents();
        $form = $this->createForm(UpcomingeventsType::class, $upcomingevent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $upcomingeventsRepository->add($upcomingevent);
            return $this->redirectToRoute('app_upcomingevents_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('upcomingevents/new.html.twig', [
            'upcomingevent' => $upcomingevent,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}", name="app_upcomingevents_show", methods={"GET"})
     */
    public function show(Upcomingevents $upcomingevent): Response
    {
        return $this->render('upcomingevents/show.html.twig', [
            'upcomingevent' => $upcomingevent,
        ]);
    }
    /**
     * @Route("/{id}/edit", name="app_upcomingevents_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Upcomingevents $upcomingevent , UpcomingeventsRepository $upcomingeventsRepository): Response
    {
        $form = $this->createForm(UpcomingeventsType::class, $upcomingevent);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $upcomingeventsRepository->add($upcomingevent);
            return $this->redirectToRoute('app_upcomingevents_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('upcomingevents/edit.html.twig', [
            'upcomingevent' => $upcomingevent,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}/delete", name="app_upcomingevents_delete", methods={"POST"})
     */
    public function delete(Request $request, Upcomingevents $upcomingevent, UpcomingeventsRepository $upcomingeventsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$upcomingevent->getId(), $request->request->get('_token'))) {
            $upcomingeventsRepository->remove($upcomingevent);
        }

        return $this->redirectToRoute('app_upcomingevents_index', [], Response::HTTP_SEE_OTHER);
    }







}
