<?php

namespace App\Controller;

use App\Entity\Vendre;
use App\Form\VendreType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/vendre")
 */
class VendreController extends AbstractController
{
    /**
     * @Route("/", name="app_vendre_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $vendres = $entityManager
            ->getRepository(Vendre::class)
            ->findAll();

        return $this->render('vendre/index.html.twig', [
            'vendres' => $vendres,
        ]);
    }

    /**
     * @Route("/new", name="app_vendre_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $vendre = new Vendre();
        $form = $this->createForm(VendreType::class, $vendre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($vendre);
            $entityManager->flush();

            return $this->redirectToRoute('app_vendre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('vendre/new.html.twig', [
            'vendre' => $vendre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idequipement}", name="app_vendre_show", methods={"GET"})
     */
    public function show(Vendre $vendre): Response
    {
        return $this->render('vendre/show.html.twig', [
            'vendre' => $vendre,
        ]);
    }

    /**
     * @Route("/{idequipement}/edit", name="app_vendre_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Vendre $vendre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VendreType::class, $vendre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_vendre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('vendre/edit.html.twig', [
            'vendre' => $vendre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idequipement}", name="app_vendre_delete", methods={"POST"})
     */
    public function delete(Request $request, Vendre $vendre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vendre->getIdequipement(), $request->request->get('_token'))) {
            $entityManager->remove($vendre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_vendre_index', [], Response::HTTP_SEE_OTHER);
    }
}
