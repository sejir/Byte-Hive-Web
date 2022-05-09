<?php

namespace App\Controller;

use App\Entity\Guide;
use App\Form\GuideType;


use App\Services\QrcodeService;
use App\Repository\GuideRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @Route("/guide")
 */
class GuideController extends AbstractController
{

    /**
     * @Route("/admin", name="app_guide_admin", methods={"GET","POST"})
     */
    public function Admin(Request $request, GuideRepository $guideRepository): Response
    {
    {
        $em = $this->getDoctrine()->getManager();


        if($request->isXmlHttpRequest()) {
            $serializer = new Serializer(array(new ObjectNormalizer()));
            $nom=$request->get('search');
            $guides = $em->getRepository(guide::class)->filterGuide($nom);
            $data = $serializer->normalize($guides);

            return new JsonResponse($data);
        }else{
            $guides=$em->getRepository(guide::class)->findAll();
            return $this->render('guide_admin/admin.html.twig',[
                'guides'=>$guides,
            ]);
        }

        // $user = $paginator->paginate(

        //   $user,
        // $request->query->getInt('page', 1),/*page number*/
        //   $request->query->getInt('limit', 3)/*limit per page*/
        //   );

        // return $this->render('user/index.html.twig', ['pagination' => $pagination]);
    }
        return $this->render('guide_admin/admin.html.twig', [
            'guides' => $guideRepository->findAll(),

        ]);
    }
    /**
     * @Route("/add3", name="add_guide", methods={"GET"})
     */

    public function addguide(Request $request, SerializerInterface $serializer)
    {
        $Guide = new Guide();
        $nom = $request->get("nom");
        $prenom = $request->get("prenom");

        $disponoibilte = $request->get($disponoibilte);
        $lieux = $request->get("lieux");
        $em = $this->getDoctrine()->getManager();
        $Guide->setNom($nom);
        $Guide->setPrenom($prenom);
        $Guide->setDisponoibilte($disponoibilte);
        $Guide->setLieux($lieux);

        $em->persist($Guide);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($Guide);
        return new JsonResponse($formatted);

    }


    /**
     * @Route("/guide", name="app_guide_index", methods={"GET", "POST"})
     */
    public function index(Request $request,QrcodeService $qrcodeService,GuideRepository $guideRepository): Response
    {

        $qrCode = null;

        $form = $this->createForm(SearchType::class, null);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $guide=$guideRepository->findOneBy(["nom"=>$data]);
            if($guide != null){
                $qrCode = $qrcodeService->qrcode($data);
            }

        }

        return $this->render('guide/index.html.twig', [
            'guides' => $guideRepository->findAll(),
            'form' => $form->createView(),
            'qrCode' => $qrCode
        ]);
    }


    /*
    /**
     * @Route("/guide/updateguide/{id}", name="update_guide")
     * @Method("PUT")
     */
   /* public function modifierguideAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $Categorie = $this->getDoctrine()->getManager()
            ->getRepository(Guide::class)
            ->find($request->get("id"));
        $nom = $request->query->get("nom");
        $prenom = $request->query->get("prenom");

        $Categorie->setNom($nom);
        $Categorie->setPrenom($prenom);

        $em->persist($Guide);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($Guide);
        return new JsonResponse("Guide a ete modifiee avec success.");

    }



    /**
     * @Route("/guide/deleteGuide", name="delete_guide")
     * @Method("DELETE")
     */

   /* public function deleteGuideAction(Request $request) {
        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $Guide = $em->getRepository(Guide::class)->find($id);
        if($Guide!=null ) {
            $em->remove($Guide);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Votre categorie a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id Guide invalide.");


    }*/
    /**
     * @Route("/liste2",name="liste_guide")
     */


    public function getGuide(SerializerInterface $serializer )
    {
        //Nous utilisons la Repository pour récupérer les objets que nous avons dans la base de données
        $repository =$this->getDoctrine()->getRepository(Guide::class);
        $Guide=$repository->FindAll();
        //Nous utilisons la fonction normalize qui transforme en format JSON nos donnée qui sont
        //en tableau d'objet Students
        $json=$serializer->Serialize($Guide,'json',['groups'=>'post:read']);



        //return new Response(json_encode($json));
        dump($Guide);
        die;}

    /**
     * @Route("/new1", name="app_guide_new", methods={"GET", "POST"})
     */
    public function new1(Request $request, GuideRepository $guideRepository): Response
    {
        $guide = new Guide();
        $form = $this->createForm(GuideType::class, $guide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $guideRepository->add($guide);
            return $this->redirectToRoute('app_guide_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('guide/new.html.twig', [
            'guide' => $guide,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/newa", name="app_guide_neww", methods={"GET", "POST"})
     */
    public function newa(Request $request, GuideRepository $guideRepository): Response
    {
        $guide = new Guide();
        $form = $this->createForm(GuideType::class, $guide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $guideRepository->add($guide);
            return $this->redirectToRoute('app_guide_admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('guide_admin/newa.html.twig', [
            'guide' => $guide,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}", name="app_guide_show", methods={"GET"})
     */
    public function show(Guide $guide): Response
    {
        return $this->render('guide/show.html.twig', [
            'guide' => $guide,
        ]);
    }
    /**
     * @Route("/showa/{id}", name="app_guide_showw", methods={"GET"})
     */
    public function showa(Guide $guide): Response
    {

        return $this->render('guide_admin/showa.html.twig', [
            'guide' => $guide,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_guide_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Guide $guide, GuideRepository $guideRepository): Response
    {
        $form = $this->createForm(GuideType::class, $guide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $guideRepository->add($guide);
            return $this->redirectToRoute('app_guide_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('guide/edit.html.twig', [
            'guide' => $guide,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}/edita", name="app_guide_editt", methods={"GET", "POST"})
     */
    public function edita(Request $request, Guide $guide, GuideRepository $guideRepository): Response
    {
        $form = $this->createForm(GuideType::class, $guide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $guideRepository->add($guide);
            return $this->redirectToRoute('app_guide_admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('guide_admin/edita.html.twig', [
            'guide' => $guide,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_guide_delete", methods={"POST"})
     */
    public function delete(Request $request, Guide $guide, GuideRepository $guideRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$guide->getId(), $request->request->get('_token'))) {
            $guideRepository->remove($guide);
        }

        return $this->redirectToRoute('app_guide_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("deletee/{id}", name="app_guide_deletea", methods={"POST"})
     */
    public function deletea(Request $request, Guide $guide, GuideRepository $guideRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$guide->getId(), $request->request->get('_token'))) {
            $guideRepository->remove($guide);
        }

        return $this->redirectToRoute('app_guide_admin', [], Response::HTTP_SEE_OTHER);
    }

}
