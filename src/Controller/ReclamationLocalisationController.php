<?php

namespace App\Controller;

use App\Entity\ReclamationLocalisation;
use App\Form\ReclamationLocalisationType;
use App\Repository\ReclamationLocalisationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reclamation/localisation")
 */
class ReclamationLocalisationController extends AbstractController
{
    /**
     * @Route("/display", name="display", methods={"GET","POST"})
     */
    public function displayReclamation(Request $reques, ReclamationLocalisationRepository $reclamationLocalisationRepository){
        $reclamationLocalisation = $this->getDoctrine()->getManager()->getRepository(ReclamationLocalisation::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reclamationLocalisation );
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/ajouterreclamtionllocalisation", name="ajout", methods={"GET","POST"})
     */
    public function ajouterReclamationLocalisation(Request $request, ReclamationLocalisationRepository $reclamationLocalisationRepository) {
        $reclamationLocalisation= new ReclamationLocalisation();
        $localisation = $request->query->get("localisation");
        $description = $request->query->get("description");
        $email= $request->query->get("email");
        $fullname = $request->query->get("fullname");
        $entityManager= $this->getDoctrine()->getManager();
    
        $reclamationLocalisation->setLocalisation($localisation);
        $reclamationLocalisation->setDescription($description);
        $reclamationLocalisation->setEmail($email);
        $reclamationLocalisation->setFullname($fullname);
        $entityManager->persist($reclamationLocalisation);
        $entityManager->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reclamationLocalisation);
    
        return new JsonResponse($formatted);
    
    }

    /**
     * @Route("/modifierreclamationlocalisation", name="modif", methods={"GET","POST"})
     */

    public function modifierReclamationLocalisation(Request $request,ReclamationLocalisationRepository $reclamationLocalisationRepository){
        $entityManager=$this->getDoctrine()->getManager();
        $reclamationLocalisation = $this->getDoctrine()->getManager()->getRepository(ReclamationGuide::class)->find($request->get("id"));
        $reclamationLocalisation->setLocalisation($request->get("localisation"));
        $reclamationLocalisation->setDescription($request->get("description"));
        $reclamationLocalisation->setEmail($request->get("email"));
        $reclamationLocalisation->setFullname($request->get("fullname"));


        $entityManager->persist($reclamationLocalisation);
        $entityManager->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reclamationLocalisation);
        return new JsonResponse("Report updated successfully!");
    }

    /**
     * @Route("/deletereclamationlocalisation", name="delete", methods={"GET","POST"})
     */

    public function deleteReclamationLocalisation(Request $request) {
        $id = $request->get("id");
        $entityManager = $this->getDoctrine()->getManager();
        $reclamationLocalisation = $entityManager->getRepository(ReclamationLocalisation::class)->find($id);
        if ($reclamationLocalisation!=null) {
            $entityManager->remove($reclamationLocalisation);
            $entityManager->flush();
     
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize("Report deleted successfully!");
        }
        return new JsonResponse("id user invalide");
        }

    /**
     * @Route("/", name="app_reclamation_localisation_index", methods={"GET"})
     */
    public function index(ReclamationLocalisationRepository $reclamationLocalisationRepository): Response
    {
        return $this->render('reclamation_localisation/index.html.twig', [
            'reclamation_localisations' => $reclamationLocalisationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_reclamation_localisation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ReclamationLocalisationRepository $reclamationLocalisationRepository): Response
    {
        $reclamationLocalisation = new ReclamationLocalisation();
        $form = $this->createForm(ReclamationLocalisationType::class, $reclamationLocalisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationLocalisationRepository->add($reclamationLocalisation);
            return $this->redirectToRoute('app_reclamation_localisation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation_localisation/new.html.twig', [
            'reclamation_localisation' => $reclamationLocalisation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_reclamation_localisation_show", methods={"GET"})
     */
    public function show(ReclamationLocalisation $reclamationLocalisation): Response
    {
        return $this->render('reclamation_localisation/show.html.twig', [
            'reclamation_localisation' => $reclamationLocalisation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_reclamation_localisation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ReclamationLocalisation $reclamationLocalisation, ReclamationLocalisationRepository $reclamationLocalisationRepository): Response
    {
        $form = $this->createForm(ReclamationLocalisationType::class, $reclamationLocalisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationLocalisationRepository->add($reclamationLocalisation);
            return $this->redirectToRoute('app_reclamation_localisation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation_localisation/new.html.twig', [
            'reclamation_localisation' => $reclamationLocalisation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_reclamation_localisation_delete", methods={"POST"})
     */
    public function delete(Request $request, ReclamationLocalisation $reclamationLocalisation, ReclamationLocalisationRepository $reclamationLocalisationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamationLocalisation->getId(), $request->request->get('_token'))) {
            $reclamationLocalisationRepository->remove($reclamationLocalisation);
        }

        return $this->redirectToRoute('app_reclamation_localisation_index', [], Response::HTTP_SEE_OTHER);
    }
}
