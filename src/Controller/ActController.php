<?php

namespace App\Controller;

use App\Entity\Act;
use App\Form\ActType;
use App\Repository\ActRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/act")
 */
class ActController extends AbstractController
{
    /**
     * @Route("/", name="act_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $acts = $entityManager
            ->getRepository(Act::class)
            ->findAll();

        return $this->render('act/index.html.twig', [
            'acts' => $acts,
        ]);
    }

    /**
     * @Route("/new", name="act_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $act = new Act();
        $form = $this->createForm(ActType::class, $act);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($act);
            $entityManager->flush();

            return $this->redirectToRoute('act_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('act/new.html.twig', [
            'act' => $act,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAct}", name="act_show", methods={"GET"})
     */
    public function show(Act $act): Response
    {
        return $this->render('act/show.html.twig', [
            'act' => $act,
        ]);
    }

    /**
     * @Route("/{idAct}/edit", name="act_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Act $act, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ActType::class, $act);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('act_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('act/edit.html.twig', [
            'act' => $act,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAct}", name="act_delete", methods={"POST"})
     */
    public function delete(Request $request, Act $act, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$act->getIdAct(), $request->request->get('_token'))) {
            $entityManager->remove($act);
            $entityManager->flush();
        }

        return $this->redirectToRoute('act_index', [], Response::HTTP_SEE_OTHER);
    }



}
