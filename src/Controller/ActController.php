<?php

namespace App\Controller;

use App\Entity\Act;
use App\Form\ActType;
use App\Repository\ActRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use DateTime;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;


class ActController extends AbstractController
{
    /**
     * @Route("/act/", name="act_index", methods={"GET"})
     */
    public function index(ActRepository  $repository,Request $request, PaginatorInterface $paginator)
    {
        /*$session = $this->requestStack->getSession();
        $user = $session->get('user');

        if($user == null )
            return $this->redirectToRoute('login');
        $user =  $this->getDoctrine()->getRepository(User::class)->findOneBy(['id'=>$user[0]]);
        if($user == null )
            return $this->redirectToRoute('login');

        if($user->getRole() == 'client' )
        {
            return $this->redirectToRoute('user');
        }
        //recuperer le repository pour utiliser la fonction findAll
        $r=$this->getDoctrine()->getRepository(act::class);

        //faire appel a la fonction findAll
        $badges=$r->findAll();
        return $this->render('badge/index.html.twig', [
            'b' =>$acts,
        ]);*/
        $donnees=$repository->findAll();
        $acts = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4 // Nombre de résultats par page
        );
        return $this->render('act/index.html.twig', [
            'acts' => $acts,
        ]);
    }

    /**
     * @Route("/actClient/", name="act_client", methods={"GET"})
     */
    public function ActClient(ActRepository  $repository,Request $request, PaginatorInterface $paginator)
    {
        $donnees=$repository->findAll();
        $actC = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4 // Nombre de résultats par page
        );
        return $this->render('act/Client.html.twig', [
            'actC' => $actC,
        ]);
    }

    /**
     * @Route("/act/new", name="act_new", methods={"GET", "POST"})
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
     * @Route("/act/{idAct}", name="act_show", methods={"GET"})
     */
    public function show(Act $act): Response
    {
        return $this->render('act/show.html.twig', [
            'act' => $act,
        ]);
    }

    /**
     * @Route("/act/{idAct}/edit", name="act_edit", methods={"GET","POST"})
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
     * @Route("/act/{idAct}", name="act_delete", methods={"POST"})
     */
    public function delete(Request $request, Act $act, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$act->getIdAct(), $request->request->get('_token'))) {
            $entityManager->remove($act);
            $entityManager->flush();
        }

        return $this->redirectToRoute('act_index', [], Response::HTTP_SEE_OTHER);
    }






    /**********************************Calendrier******************************************************/
    /**
     * @Route("/calendarShow", name="calendar_index", methods={"GET"})
     */
    public function indexCalendar(ActRepository  $evenementRepository): Response
    {

        return $this->render('act/index2CalendrierEventA.html.twig', [
            'calendars' => $evenementRepository->findAll(),
        ]);
    }

    /**
     * @Route("/calendar{id}", name="calendar_show", methods={"GET"})
     */
    public function showCalendar(Act $evenement): Response
    {
        return $this->render('calendar/show.html.twig', [
            'calendar' => $evenement,
        ]);
    }

    /**
     * @Route("/calendar{id}/edit", name="calendar_edit", methods={"GET","POST"})
     */
    public function editCalendar(Request $request, Act $evenement): Response
    {
        $form = $this->createForm(ActType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('calendar_index');
        }

        return $this->render('calendar/edit.html.twig', [
            'calendar' => $evenement,
            'form' => $form->createView(),
        ]);
    }
    /// tri acts par date Debut asc
    /**
     * @Route("/triDateDebutAsc", name="triDateDebutAsc")
     */
    public function triDateDebutAsc(Request $request, PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT a FROM App\Entity\Act a 
            ORDER BY a.dDebut ASC'
        );

        $acts = $query->getResult();
        $acts = $paginator->paginate(
            $acts,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('act/index.html.twig',
            array('acts' => $acts));
    }

/// tri acts par date Debut des
    /**
     * @Route("/triDateDebutDesc", name="triDateDebutDesc")
     */
    public function triDateDebutDesc(Request $request, PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT a FROM App\Entity\Act a 
            ORDER BY a.dDebut Desc'
        );

        $acts = $query->getResult();
        $acts = $paginator->paginate(
            $acts,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('act/index.html.twig',
            array('acts' => $acts));
    }


    /// tri Client acts par date Debut asc
    /**
     * @Route("/triClientDateDebutAsc", name="triClientDateDebutAsc")
     */
    public function triClientDateDebutAsc(Request $request, PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT a FROM App\Entity\Act a 
            ORDER BY a.dDebut ASC'
        );

        $actC = $query->getResult();
        $actC = $paginator->paginate(
            $actC,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('act/Client.html.twig',
            array('actC' => $actC));
    }

/// tri acts par date Debut des
    /**
     * @Route("/triClientDateDebutDesc", name="triClientDateDebutDesc")
     */
    public function triClientDateDebutDesc(Request $request, PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT a FROM App\Entity\Act a 
            ORDER BY a.dDebut Desc'
        );

        $actC = $query->getResult();
        $actC = $paginator->paginate(
            $actC,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('act/Client.html.twig',
            array('actC' => $actC));
    }

    /******PDF*******/
    /**
     * @param ActRepository $repository
     * @return Response
     * @Route ("/AfficheActPDF",name="AfficheActPDF")
     */
    public function AfficheActPDF(ActRepository  $repository){

// Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        $acts=$repository->findAll();

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('act/myPDFAct.html.twig',
            ['acts'=>$acts]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("OurAct.pdf", [
            "Attachment" => false
        ]);
        return new Response("The PDF file has been succesfully generated !");
    }

                     /****************** JSON  ******************/

    /**
     * @Route("/dact", name="dact")
     */
    public function dact(NormalizerInterface  $Normalizer)
    {
       // dd(1);
        $repository=$this->getDoctrine()->getRepository(Act::class)  ;
        $act=$repository->findAll();

        $jsonContent = $Normalizer->normalize($act,'json',['groups' => 'activities']);
        return new Response(json_encode($jsonContent));

    }





    /******************Ajout act*****************************************/

    /**
     * @Route("/addEventJSON", name="add_events")
     */
    public function addEventJSON(Request $request, NormalizerInterface $Normalizer){
        $em=$this->getDoctrine()->getManager();
        $act = new act();
         $act->setNomAct($request->get('nom_act'));
         $act->setDescription($request->get('description'));
        $act->setDDebut(date_create_from_format("d/m/yy",$request->get('d_debut')));
        $act->setDFin(date_create_from_format("d/m/yy",$request->get('d_fin')));
        $act->setEmplacement($request->get('emplacement'));
        $act->setIdemplacement($request->get('idemplacement'));
        $act->setNbPersonne($request->get('nb_personne'));
        $act->setIdUser($request->get('id_user'));


        $em->persist($act);
        $em->flush();
        $jsonContent = $Normalizer->normalize($act, 'json',['groups'=>'activities']);
        return new Response("Informations ajoutées avec succès".json_encode($jsonContent));
    }

    /**
     * @Route("/updateEventJSON/{id}", name="update_events")
     */
    public function updateEventJSON(Request $request, NormalizerInterface $Normalizer,$id){
        $em=$this->getDoctrine()->getManager();
        $act=$em->getRepository(act::class)->find($id);
        //$act->setNomAct($request->get('nom_act'));
        $act->setDescription($request->get('description'));
        $act->setDDebut(date_create_from_format("d/m/yy",$request->get('d_debut')));
        $act->setDFin(date_create_from_format("d/m/yy",$request->get('d_fin')));
        $act->setEmplacement($request->get('emplacement'));
        $act->setIdemplacement($request->get('idemplacement'));
        $act->setNbPersonne($request->get('nb_personne'));
        $act->setIdUser($request->get('id_user'));

        $em->flush();
        $jsonContent=$Normalizer->normalize($act,'json',['groups'=>'activities']);
        return new Response("Informations mises à jour avec succès".json_encode($jsonContent));
    }





    /**
     * @Route("/deleteEventJSON/{id}", name="delete_events")
     */
    public function deleteEventJSON(Request $request, NormalizerInterface $Normalizer,$id){
        $em=$this->getDoctrine()->getManager();
        $act=$em->getRepository(act::class)->find($id);
        $em->remove($act);
        $em->flush();
        $jsonContent=$Normalizer->normalize($act,'json',['groups'=>'activities']);
        return new Response("Evénement supprimé avec succès".json_encode($jsonContent));
    }

    /**
     * @Route("/showjson/{id}", name="showjson")
     */
    public function showjson(Request $request, NormalizerInterface $Normalizer,$id){
        $em=$this->getDoctrine()->getManager();
        $act=$em->getRepository(act::class)->find($id);
        $jsonContent=$Normalizer->normalize($act,'json',['groups'=>'activities']);
        return new Response(json_encode($jsonContent));
    }









}
