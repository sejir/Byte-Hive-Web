<?php

namespace App\Controller;

use App\Entity\Equipementvendre;
use App\Form\EquipementvendreType;
use App\Repository\EquipementvendreRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * @Route("/equipementvendre")
 */
class EquipementvendreController extends AbstractController
{
    /**
     * @Route("/", name="app_equipementvendre_index")
     */
    public function index(Request $request): Response
    {
        $em=$this->getDoctrine()->getManager();
        $eq= $em->getRepository(Equipementvendre::class)->findAll();
        if($request->isMethod("POST"))
        {
            $nom=$request->get('nom');
            $eq=$em->getRepository(Equipementvendre::class)->findBy(array('nomequipement'=>$nom));
        }

        return $this->render('equipementvendre/index.html.twig', [
            'equipementvendres' => $eq,
        ]);
    }

    /**
     * @Route("/new", name="app_equipementvendre_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $equipementvendre = new Equipementvendre();
        $form = $this->createForm(EquipementvendreType::class, $equipementvendre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($equipementvendre);
            $entityManager->flush();

            return $this->redirectToRoute('app_equipementvendre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipementvendre/new.html.twig', [
            'equipementvendre' => $equipementvendre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idequipement}", name="app_equipementvendre_show", methods={"GET"})
     */
    public function show(Equipementvendre $equipementvendre): Response
    {
        return $this->render('equipementvendre/show.html.twig', [
            'equipementvendre' => $equipementvendre,
        ]);
    }

    /**
     * @Route("/{idequipement}/edit", name="app_equipementvendre_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Equipementvendre $equipementvendre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EquipementvendreType::class, $equipementvendre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_equipementvendre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipementvendre/edit.html.twig', [
            'equipementvendre' => $equipementvendre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idequipement}", name="app_equipementvendre_delete", methods={"POST"})
     */
    public function delete(Request $request, Equipementvendre $equipementvendre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$equipementvendre->getIdequipement(), $request->request->get('_token'))) {
            $entityManager->remove($equipementvendre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_equipementvendre_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("b/", name="app_equipementvendreb_index", methods={"GET"})
     */
    public function indexb(EntityManagerInterface $entityManager): Response
    {
        $equipementvendres = $entityManager
            ->getRepository(Equipementvendre::class)
            ->findAll();

        return $this->render('equipementvendreb/index.html.twig', [
            'equipementvendres' => $equipementvendres,
        ]);
    }

    /**
     * @Route("b/new", name="app_equipementvendreb_new", methods={"GET", "POST"})
     */
    public function newb(Request $request, EntityManagerInterface $entityManager): Response
    {
        $equipementvendre = new Equipementvendre();
        $form = $this->createForm(EquipementvendreType::class, $equipementvendre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($equipementvendre);
            $entityManager->flush();

            return $this->redirectToRoute('app_equipementvendreb_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipementvendreb/new.html.twig', [
            'equipementvendre' => $equipementvendre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("b/{idequipement}", name="app_equipementvendreb_show", methods={"GET"})
     */
    public function showb(Equipementvendre $equipementvendre): Response
    {
        return $this->render('equipementvendreb/show.html.twig', [
            'equipementvendre' => $equipementvendre,
        ]);
    }

    /**
     * @Route("b/{idequipement}/edit", name="app_equipementvendreb_edit", methods={"GET", "POST"})
     */
    public function editb(Request $request, Equipementvendre $equipementvendre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EquipementvendreType::class, $equipementvendre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_equipementvendreb_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipementvendreb/edit.html.twig', [
            'equipementvendre' => $equipementvendre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("b/{idequipement}", name="app_equipementvendreb_delete", methods={"POST"})
     */
    public function deleteb(Request $request, Equipementvendre $equipementvendre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$equipementvendre->getIdequipement(), $request->request->get('_token'))) {
            $entityManager->remove($equipementvendre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_equipementvendreb_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("Liste", name="Liste" , methods={"GET"})
     */
    public function Liste()
    {
        $repository=$this->getDoctrine()->getRepository(Equipementvendre::class);
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);



        $equipementvendre=$repository->findall();


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('equipementvendre/liste.html.twig',
            ['equipementvendres'=>$equipementvendre]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("Liste_des_equipementvendre.pdf", [
            "Attachment" => true
        ]);


    }

    /**
     * @Route("trinom", name="trinom")
     */
    public function triNom(Request $request, PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT ev FROM App\Entity\Equipementvendre ev 
            ORDER BY ev.nomequipement'
        );

        $eq = $query->getResult();
        $eq = $paginator->paginate(
            $eq,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('equipementvendre/index.html.twig',
            array('equipementvendres' => $eq));
    }

    /**
     * @Route("triprix", name="triprix")
     */
    public function triPrix(Request $request, PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT ev FROM App\Entity\Equipementvendre ev 
            ORDER BY ev.prixequipement'
        );

        $eq = $query->getResult();
        $eq = $paginator->paginate(
            $eq,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('equipementvendre/index.html.twig',
            array('equipementvendres' => $eq));
    }

    /**
     * @Route("triquantite", name="triquantite")
     */
    public function triQuantite(Request $request, PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT ev FROM App\Entity\Equipementvendre ev 
            ORDER BY ev.quantiteequipement'
        );

        $eq = $query->getResult();
        $eq = $paginator->paginate(
            $eq,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('equipementvendre/index.html.twig',
            array('equipementvendres' => $eq));
    }



    /**
     * @Route("prix", name="rechercheprix" )
     */
    public function rechercheByPrix(Request $request){
        $em=$this->getDoctrine()->getManager();
        $eq= $em->getRepository(Equipementvendre::class)->findAll();
        if($request->isMethod("POST"))
        {
           $prix=$request->get('prix');
           $eq=$em->getRepository(Equipementvendre::class)->findBy(array('prixequipement'=>$prix));
        }
        return $this->render("equipementvendre/recherche.html.twig",array('equipementvendres'=>$eq));
    }

    /**
     * @Route("bchiffre", name="chiffre")
     */
    public function chiffre(Request $request, PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT sum(ev.prixequipement*ev.quantiteequipement) FROM App\Entity\Equipementvendre ev'
        );

        $eq = $query->getSingleScalarResult();

        return $this->render('equipementvendreb/chiffreAffaire.html.twig',
            array('chiffre' => $eq));
    }

    /**
     * @Route("stats", name="stat")
     */
    public function new2(): Response
    { $repository = $this->getDoctrine()->getRepository(Equipementvendre::class);
        $equipementvendre = $repository->findAll();

        //$equipementlouer = $entityManager
        // ->getRepository(Equipementlouer::class)
        // ->findAll();
        //$em = $this->getDoctrine()->getManager();

        $rd=0;
        $qu=0;
        $es=0;


        foreach ($equipementvendre as $equipementvendre)
        {
            if (  $equipementvendre->getQuantiteequipement()<23)  :

                $rd+=1;
            elseif ($equipementvendre->getQuantiteequipement()>23):

                $qu+=1;


            endif;

        }


        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['Type', 'nombres'],
                ['Quantité<23',     $rd],
                ['Quantité>23',      $qu]

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

        return $this->render('equipementvendreb/stat.html.twig', array('piechart' => $pieChart));

    }

}
