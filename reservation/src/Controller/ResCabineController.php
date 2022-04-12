<?php

namespace App\Controller;

use App\Entity\ResCabine;
use App\Form\ResCabineType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/res/cabine")
 */
class ResCabineController extends AbstractController
{
    /**
     * @Route("/", name="app_res_cabine_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $resCabines = $entityManager
            ->getRepository(ResCabine::class)
            ->findAll();

        return $this->render('res_cabine/index.html.twig', [
            'res_cabines' => $resCabines,
        ]);
    }

    /**
     * @Route("/new", name="app_res_cabine_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $resCabine = new ResCabine();
        $form = $this->createForm(ResCabineType::class, $resCabine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($resCabine);
            $entityManager->flush();

            return $this->redirectToRoute('app_res_cabine_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('res_cabine/new.html.twig', [
            'res_cabine' => $resCabine,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_res_cabine_show", methods={"GET"})
     */
    public function show(ResCabine $resCabine): Response
    {
        return $this->render('res_cabine/show.html.twig', [
            'res_cabine' => $resCabine,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_res_cabine_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ResCabine $resCabine, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ResCabineType::class, $resCabine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_res_cabine_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('res_cabine/edit.html.twig', [
            'res_cabine' => $resCabine,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_res_cabine_delete", methods={"POST"})
     */
    public function delete(Request $request, ResCabine $resCabine, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$resCabine->getId(), $request->request->get('_token'))) {
            $entityManager->remove($resCabine);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_res_cabine_index', [], Response::HTTP_SEE_OTHER);
    }
}
