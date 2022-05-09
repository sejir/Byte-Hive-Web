<?php

namespace App\Controller;

use App\Entity\Equipementlouer;
use App\Form\EquipementlouerType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
/**
 * @Route("/equipementlouer")
 */
class EquipementlouerController extends AbstractController
{
    /**
     * @Route("/", name="app_equipementlouer_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $equipementlouers = $entityManager
            ->getRepository(Equipementlouer::class)
            ->findAll();

        return $this->render('equipementlouer/index.html.twig', [
            'equipementlouers' => $equipementlouers,
        ]);
    }

    /**
     * @Route("/new", name="app_equipementlouer_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $equipementlouer = new Equipementlouer();
        $form = $this->createForm(EquipementlouerType::class, $equipementlouer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($equipementlouer);
            $entityManager->flush();

            return $this->redirectToRoute('app_equipementlouer_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipementlouer/new.html.twig', [
            'equipementlouer' => $equipementlouer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idequipement}", name="app_equipementlouer_show", methods={"GET"})
     */
    public function show(Equipementlouer $equipementlouer): Response
    {
        return $this->render('equipementlouer/show.html.twig', [
            'equipementlouer' => $equipementlouer,
        ]);
    }

    /**
     * @Route("/{idequipement}/edit", name="app_equipementlouer_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Equipementlouer $equipementlouer, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EquipementlouerType::class, $equipementlouer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_equipementlouer_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipementlouer/edit.html.twig', [
            'equipementlouer' => $equipementlouer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idequipement}", name="app_equipementlouer_delete", methods={"POST"})
     */
    public function delete(Request $request, Equipementlouer $equipementlouer, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$equipementlouer->getIdequipement(), $request->request->get('_token'))) {
            $entityManager->remove($equipementlouer);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_equipementlouer_index', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("b/", name="app_equipementlouerb_index", methods={"GET"})
     */
    public function indexb(EntityManagerInterface $entityManager): Response
    {
        $equipementlouers = $entityManager
            ->getRepository(Equipementlouer::class)
            ->findAll();

        return $this->render('equipementlouerb/index.html.twig', [
            'equipementlouers' => $equipementlouers,
        ]);
    }

    /**
     * @Route("b/new", name="app_equipementlouerb_new", methods={"GET", "POST"})
     */
    public function newb(Request $request, EntityManagerInterface $entityManager): Response
    {
        $equipementlouer = new Equipementlouer();
        $form = $this->createForm(EquipementlouerType::class, $equipementlouer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($equipementlouer);
            $entityManager->flush();

            return $this->redirectToRoute('app_equipementlouerb_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipementlouerb/new.html.twig', [
            'equipementlouer' => $equipementlouer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("b/{idequipement}", name="app_equipementlouerb_show", methods={"GET"})
     */
    public function showb(Equipementlouer $equipementlouer): Response
    {
        return $this->render('equipementlouerb/show.html.twig', [
            'equipementlouer' => $equipementlouer,
        ]);
    }

    /**
     * @Route("b/{idequipement}/edit", name="app_equipementlouerb_edit", methods={"GET", "POST"})
     */
    public function editb(Request $request, Equipementlouer $equipementlouer, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EquipementlouerType::class, $equipementlouer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_equipementlouerb_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipementlouerb/edit.html.twig', [
            'equipementlouer' => $equipementlouer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("b/{idequipement}", name="app_equipementlouerb_delete", methods={"POST"})
     */
    public function deleteb(Request $request, Equipementlouer $equipementlouer, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$equipementlouer->getIdequipement(), $request->request->get('_token'))) {
            $entityManager->remove($equipementlouer);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_equipementlouerb_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("stats", name="stat2")
     */
    public function new2(): Response
    { $repository = $this->getDoctrine()->getRepository(Equipementlouer::class);
        $equipementlouer = $repository->findAll();

        //$equipementlouer = $entityManager
           // ->getRepository(Equipementlouer::class)
           // ->findAll();
        //$em = $this->getDoctrine()->getManager();

        $rd=0;
        $qu=0;
        $es=0;


        foreach ($equipementlouer as $equipementlouer)
        {
            if (  $equipementlouer->getPrixequipement()<23)  :

                $rd+=1;
            elseif ($equipementlouer->getPrixequipement()>23):

                $qu+=1;


            endif;

        }


        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['Type', 'nombres'],
                ['<23',     $rd],
                ['>23',      $qu]

            ]
        );
        $pieChart->getOptions()->setColors(['#ffd700', '#C0C0C0', '#cd7f32']);

        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('equipementlouerb/stat.html.twig', array('piechart' => $pieChart));

    }
    /**
     * @Route("trinom", name="trinom2")
     */
    public function triNom(Request $request, PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT ev FROM App\Entity\Equipementlouer ev 
            ORDER BY ev.nomequipement'
        );

        $eq = $query->getResult();
        $eq = $paginator->paginate(
            $eq,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('equipementlouer/index.html.twig',
            array('equipementlouers' => $eq));
    }
    /**
     * @Route("triprix", name="triprix2")
     */
    public function triPrix(Request $request, PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT ev FROM App\Entity\Equipementlouer ev 
            ORDER BY ev.prixequipement'
        );

        $eq = $query->getResult();
        $eq = $paginator->paginate(
            $eq,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('equipementlouer/index.html.twig',
            array('equipementlouers' => $eq));
    }

}
