<?php

namespace App\Controller;

use App\Entity\Act;
use App\Entity\Evenement;
use App\Repository\ActRepository;
use App\Repository\EvenementRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class APIController extends AbstractController
{
    /**
     * @Route("/api", name="api")
     */
    public function index()
    {
        return $this->render('api_controller/index.html.twig', [
            'controller_name' => 'APIController',
        ]);
    }

    /**
     * @Route("/api/{id}/edit", name="api_event_edit", methods={"PUT"})
     */
    public function majEvent(?Act $calendar, Request $request)
    {
        // On récupère les données
        $donnees = json_decode($request->getContent());

        if(
            isset($donnees->title) && !empty($donnees->title) &&
            isset($donnees->start) && !empty($donnees->start) &&
            isset($donnees->description) && !empty($donnees->description) &&
            isset($donnees->backgroundColor) && !empty($donnees->backgroundColor) &&
            isset($donnees->borderColor) && !empty($donnees->borderColor) &&
            isset($donnees->textColor) && !empty($donnees->textColor)
        ){
            // Les données sont complètes
            // On initialise un code
            $code = 200;

            // On vérifie si l'id existe
            if(!$calendar){
                // On instancie un rendez-vous
                $calendar = new Act();

                // On change le code
                $code = 201;
            }

            // On hydrate l'objet avec les données
            $calendar->setNomAct($donnees->title);
            $calendar->setDescription($donnees->description);
            $calendar->setDDebut(new DateTime($donnees->start));
            $calendar->setDFin(new DateTime($donnees->end));
           // $calendar->setBackgroundColor($donnees->backgroundColor);
           // $calendar->setBorderColor($donnees->borderColor);
           // $calendar->setTextColor($donnees->textColor);

            $em = $this->getDoctrine()->getManager();
            $em->persist($calendar);
            $em->flush();

            // On retourne le code
            return new Response('Ok', $code);
        }else{
            // Les données sont incomplètes
            return new Response('Données incomplètes', 404);
        }


        return $this->render('api/index.html.twig', [
            'controller_name' => 'APIController',
        ]);
    }



    /**
     * @Route("/CalendrierAct", name="main")
     */
    public function evenement(ActRepository $evenement)
    {
        $events = $evenement->findAll();

        $rdvs = [];
        // $allDay= true;
        foreach($events as $event){
            $rdvs[] = [
                'id' => $event->getIdAct(),
                'start' => $event->getDDebut()->format('Y-m-d H:i:s'),
                'end' => $event->getDFin()->format('Y-m-d H:i:s'),
                'title' => $event->getNomAct(),
                'description' => $event->getDescription(),
                'backgroundColor' => "#FFB6C1",
                'borderColor' => "#ffffff",
                'textColor' => "#000000",
               // 'allDay' => $allDay,
            ];
        }

        $data = json_encode($rdvs);

        return $this->render('act/index2CalendrierEventA.html.twig', compact('data'));
    }
}

