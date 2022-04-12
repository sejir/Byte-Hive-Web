<?php

namespace App\Controller;

use App\Entity\ResAct;
use App\Form\ResActType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/res/act")
 */
class ResActController extends AbstractController
{
    /**
     * @Route("/", name="app_res_act_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $resActs = $entityManager
            ->getRepository(ResAct::class)
            ->findAll();

        return $this->render('res_act/index.html.twig', [
            'res_acts' => $resActs,
        ]);
    }

    /**
     * @Route("/new", name="app_res_act_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $resAct = new ResAct();
        $form = $this->createForm(ResActType::class, $resAct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($resAct);
            $entityManager->flush();

            return $this->redirectToRoute('app_res_act_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('res_act/new.html.twig', [
            'res_act' => $resAct,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idres}", name="app_res_act_show", methods={"GET"})
     */
    public function show(ResAct $resAct): Response
    {
        return $this->render('res_act/show.html.twig', [
            'res_act' => $resAct,
        ]);
    }

    /**
     * @Route("/{idres}/edit", name="app_res_act_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ResAct $resAct, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ResActType::class, $resAct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_res_act_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('res_act/edit.html.twig', [
            'res_act' => $resAct,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idres}", name="app_res_act_delete", methods={"POST"})
     */
    public function delete(Request $request, ResAct $resAct, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$resAct->getIdres(), $request->request->get('_token'))) {
            $entityManager->remove($resAct);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_res_act_index', [], Response::HTTP_SEE_OTHER);
    }
}
