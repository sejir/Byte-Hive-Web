<?php

namespace App\Controller;

use App\Entity\ReclamationGuide;
use App\Form\ReclamationGuideType;
use App\Repository\ReclamationGuideRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * @Route("/reclamation/guide")
 */
class ReclamationGuideController extends AbstractController
{
    /**
     * @Route("/display", name="display", methods={"GET","POST"})
     */
    public function displayReclamation(Request $reques, ReclamationGuideRepository $reclamationGuideRepository){
        $reclamationGuide = $this->getDoctrine()->getManager()->getRepository(ReclamationGuide::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reclamationGuide );
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/ajouterreclamtionguide", name="ajout", methods={"GET","POST"})
     */
    public function ajouterReclamationGuide(Request $request,ReclamationGuideRepository $reclamationGuideRepository) {
        $reclamationGuide= new ReclamationGuide();
        $nom_guide = $request->query->get("nom_guide");
        $description = $request->query->get("description");
        $email= $request->query->get("email");
        $fullname = $request->query->get("fullname");
        $entityManager= $this->getDoctrine()->getManager();
    
        $reclamationGuide->setNomGuide($nom_guide);
        $reclamationGuide->setDescription($description);
        $reclamationGuide->setEmail($email);
        $reclamationGuide->setFullname($fullname);
        $entityManager->persist($reclamationGuide);
        $entityManager->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reclamationGuide);
    
        return new JsonResponse($formatted);
    
    }

    /**
     * @Route("/modifierreclamationguide", name="modif", methods={"GET","POST"})
     */

    public function modifierReclamationGuide(Request $request,ReclamationGuideRepository $reclamationGuideRepository){
        $entityManager=$this->getDoctrine()->getManager();
        $reclamationGuide = $this->getDoctrine()->getManager()->getRepository(ReclamationGuide::class)->find($request->get("id"));
        $reclamationGuide->setNomGuide($request->get("nom_guide"));
        $reclamationGuide->setDescription($request->get("description"));
        $reclamationGuide->setEmail($request->get("email"));
        $reclamationGuide->setFullname($request->get("fullname"));


        $entityManager->persist($reclamationGuide);
        $entityManager->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reclamationGuide);
        return new JsonResponse("Report updated successfully!");
    }

    /**
     * @Route("/deletereclamationguide", name="delete", methods={"GET","POST"})
     */

    public function deleteReclamationGuide(Request $request) {
        $id = $request->get("id");
        $entityManager = $this->getDoctrine()->getManager();
        $reclamationGuide = $entityManager->getRepository(ReclamationGuide::class)->find($id);
        if ($reclamationGuide!=null) {
            $entityManager->remove($reclamationGuide);
            $entityManager->flush();
     
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize("Reclamation a ete supprimé avec succés.");
        }
        return new JsonResponse("id user invalide");
        }


    /**
     * @Route("/index", name="app_reclamation_guide_index", methods={"GET"})
     */
    public function index(ReclamationGuideRepository $reclamationGuideRepository): Response
    {
        return $this->render('reclamation_guide/index.html.twig', [
            'reclamation_guides' => $reclamationGuideRepository->findAll(),
        ]);
    }

    /**
     * @Route("/temp", name="app_reclamation_guide_temp", methods={"GET"})
     */
    public function temp(ReclamationGuideRepository $reclamationGuideRepository): Response
    {
        return $this->render('reclamation_guide/temp.html.twig', [
            'reclamation_guides' => $reclamationGuideRepository->findAll(),
        ]);
    }

    /**
     * @Route("/base", name="app_reclamation_guide_base", methods={"GET"})
     */
    public function base(ReclamationGuideRepository $reclamationGuideRepository): Response
    {
        return $this->render('reclamation_guide/base.html.twig', [
            'reclamation_guides' => $reclamationGuideRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_reclamation_guide_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ReclamationGuideRepository $reclamationGuideRepository): Response
    {
        $reclamationGuide = new ReclamationGuide();
        $form = $this->createForm(ReclamationGuideType::class, $reclamationGuide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationGuideRepository->add($reclamationGuide);
             $entityManager = $this->getDoctrine()->getManager();
           $entityManager->persist($reclamationGuide);
           $entityManager->flush();
            $this->addFlash('info', 'Report Created Successfully!');
            return $this->redirectToRoute('app_reclamation_guide_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation_guide/new.html.twig', [
            'reclamation_guide' => $reclamationGuide,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_reclamation_guide_show", methods={"GET"})
     */
    public function show(ReclamationGuide $reclamationGuide): Response
    {
        return $this->render('reclamation_guide/show.html.twig', [
            'reclamation_guide' => $reclamationGuide,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_reclamation_guide_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ReclamationGuide $reclamationGuide, ReclamationGuideRepository $reclamationGuideRepository): Response
    {
        $form = $this->createForm(ReclamationGuideType::class, $reclamationGuide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationGuideRepository->add($reclamationGuide);
            return $this->redirectToRoute('app_reclamation_guide_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation_guide/new.html.twig', [
            'reclamation_guide' => $reclamationGuide,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_reclamation_guide_delete", methods={"POST"})
     */
    public function delete(Request $request, ReclamationGuide $reclamationGuide, ReclamationGuideRepository $reclamationGuideRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamationGuide->getId(), $request->request->get('_token'))) {
            $reclamationGuideRepository->remove($reclamationGuide);
        }
        return $this->redirectToRoute('app_reclamation_guide_index', [], Response::HTTP_SEE_OTHER);
    }

    /* public function notif(Request $request, ReclamationGuide $reclamationGuide, ReclamationGuideRepository $reclamationGuideRepository, NotifierInterface $notifier, string $description): Response
    {
        $reclamationGuide = new ReclamationGuide();
        $form = $this->createForm(ReclamationGuideType::class, $reclamationGuide);
        $this->bus->dispatch(new CommentMessage($reclamationGuide->getId(), $context));
        $notifier->send(new Notification('Thank you for the feedback; your comment will be posted after moderation.', ['browser']));
        return $this->render('reclamation_guide/index.html.twig', [
            'reclamation_guides' => $reclamationGuideRepository->findAll(),
        ]);
    } */
    
}
