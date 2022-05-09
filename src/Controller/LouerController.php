<?php

namespace App\Controller;

use App\Entity\Louer;
use App\Form\LouerType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/louer")
 */
class LouerController extends AbstractController
{
    /**
     * @Route("/", name="app_louer_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $louers = $entityManager
            ->getRepository(Louer::class)
            ->findAll();

        return $this->render('louer/index.html.twig', [
            'louers' => $louers,
        ]);
    }

    /**
     * @Route("/new", name="app_louer_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $louer = new Louer();
        $form = $this->createForm(LouerType::class, $louer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($louer);
            $entityManager->flush();

            return $this->redirectToRoute('app_louer_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('louer/new.html.twig', [
            'louer' => $louer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idlouer}", name="app_louer_show", methods={"GET"})
     */
    public function show(Louer $louer): Response
    {
        return $this->render('louer/show.html.twig', [
            'louer' => $louer,
        ]);
    }

    /**
     * @Route("/{idlouer}/edit", name="app_louer_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Louer $louer, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LouerType::class, $louer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_louer_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('louer/edit.html.twig', [
            'louer' => $louer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idlouer}", name="app_louer_delete", methods={"POST"})
     */
    public function delete(Request $request, Louer $louer, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$louer->getIdlouer(), $request->request->get('_token'))) {
            $entityManager->remove($louer);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_louer_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("affichelouer", name="affichelouer")
     */
    public function affichelouer(Request $request, PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT l FROM App\Entity\Louer l
            where l.dateremise > current_date()'
        );

        $eq = $query->getResult();
        $eq = $paginator->paginate(
            $eq,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('louer/index.html.twig',
            array('louers' => $eq));
    }
}
