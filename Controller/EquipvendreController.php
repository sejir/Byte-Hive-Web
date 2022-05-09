<?php

namespace App\Controller;
use App\Entity\Equipementvendre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Validator\Constraints\Json;

class EquipvendreController extends AbstractController
{
    /******************affichage employe*****************************************/

    /**
     * @Route("displayEquipvendre", name="display_equipement")
     */
    public function allEquipvendre()
    {

        $eq = $this->getDoctrine()->getManager()->getRepository(Equipementvendre::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($eq);

        return new JsonResponse($formatted);


    }

    /******************Ajouter Reclamation*****************************************/
    /**
     * @Route("/addEquipvendre", name="add_Equipvendre")
     * @Method("POST")
     */

    public function ajouterequipvendreAction(Request $request)
    {
        $eq = new Equipementvendre();
        $nomequipv = $request->query->get("nomequipv");
        $prixequipv = $request->query->get("prixequipv");
        $descriptionequipv = $request->query->get("descriptionequipv");
        $imageequipv = $request->query->get("imageequipv");
        $quantiteequipv = $request->query->get("quantiteequipv");
        $idfour = $request->query->get("idfour");
        $ratingv = $request->query->get("ratingv");


        $em = $this->getDoctrine()->getManager();

        $eq->setNomequipement($nomequipv);
        $eq->setPrixequipement($prixequipv);
        $eq->setDescriptionequipement($descriptionequipv);
        $eq->setImageequipement($imageequipv);
        $eq->setQuantiteequipement($quantiteequipv);
        $eq->setIdfournisseur($idfour);
        $eq->setRating($ratingv);


        $em->persist($eq);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($eq);
        return new JsonResponse($formatted);

    }

    /******************Supprimer Employe*****************************************/

    /**
     * @Route("/deleteEquipvendre", name="delete_Equipvendre")
     * @Method("DELETE")
     */

    public function deleteequipvendreAction(Request $request) {
        $id = $request->get("idequipement");

        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Equipementvendre::class)->find($id);
        if($reclamation!=null ) {
            $em->remove($reclamation);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("equipement a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id equipement invalide.");


    }

    /******************Modifier Employe****************************************/
    /**
     * @Route("/updateEquipvendre", name="update_Equipvendre")
     * @Method("PUT")
     */
    public function modifierequipvendreAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $eq = $this->getDoctrine()->getManager()
            ->getRepository(Equipementvendre::class)
            ->find($request->get("idequipement"));


        $eq->setNomequipement($request->get("nomequipement"));
        $eq->setPrixequipement($request->get("nomequipement"));
        $eq->setDescriptionequipement($request->get("nomequipement"));
        $eq->setImageequipement($request->get("nomequipement"));
        $eq->setQuantiteequipement($request->get("nomequipement"));
        $eq->setIdfournisseur($request->get("nomequipement"));
        $eq->setRating($request->get("nomequipement"));

        $em->persist($eq);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($eq);
        return new JsonResponse("equipement a ete modifiee avec success.");

    }
}
