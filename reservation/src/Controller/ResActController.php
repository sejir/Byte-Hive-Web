<?php

namespace App\Controller;

use App\Entity\ResAct;
use App\Form\ResActType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ResActRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;

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
        if ($this->isCsrfTokenValid('delete' . $resAct->getIdres(), $request->request->get('_token'))) {
            $entityManager->remove($resAct);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_res_act_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/map/map", name="map_index", methods={"GET"})
     */
    public function map(): Response
    {
        return $this->render('res_act/mapact.html.twig');
    }

    /**
     * @Route("/{idres}", name="app_res_act_show", methods={"GET"})
     */
    public function shows(ResAct $resAct): Response
    {
        return $this->render('res_act/show.html.twig', [
            'res_act' => $resAct,
        ]);
    }
    /**
     * @Route("/stats/chart", name="statistique")
     */
    public function stat(ResActRepository $Repository): Response
    {


        /*$pieChart->getOptions()->setTitle('Etat de terrain:');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#303030');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(false);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);*/
        $nbs = $Repository->countNbrePerso();
        $data = [['e', 'res_act']];
        foreach( (array)$nbs as $nb)
        {
            $data[] = array($nb['e'], $nb['res_act']);
        }





        $bar = new barchart();
        $bar->getData()->setArrayToDataTable(
            $data
        );

        $bar->getOptions()->setTitle('Nbre de personnes par activité:');
        $bar->getOptions()->setHeight(500);
        $bar->getOptions()->setWidth(900);
        $bar->getOptions()->getTitleTextStyle()->setColor('#07600');
        $bar->getOptions()->getTitleTextStyle()->setFontSize(25);






        return $this->render('res_act/stat.html.twig', array('barchart' => $bar,'nbs' => $nbs));
    }
    /**
     * @Route("/rechercheAct{word}", name="rechercheAct")
     */
    public function rechercheAct($word): Response
    {
        $em=$this->getDoctrine()->getManager()->getRepository(resAct::class)->findByExampleField($word);

        return $this->render('res_act/index.html.twig', [
            'res_acts' => $em,
        ]);
    }
}