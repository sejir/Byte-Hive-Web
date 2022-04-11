<?php

namespace App\Controller;

use App\Entity\Classroom;
use App\Form\ClassroomType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassroomController extends AbstractController
{
    /**
     * @Route("/classroom", name="classroom")
     */
    public function index(): Response
    {
        return $this->render('classroom/index.html.twig', [
            'controller_name' => 'ClassroomController',
        ]);
    }

    /**
     * @return Response
     * @Route("/Read",name="lire")
     */
public function read()
{
    $liste = $this->getDoctrine()
        ->getRepository(Classroom::class)
        ->findAll();
 return
     $this->render('classroom/read.html.twig',
    ['tab'=>$liste]);
}

    /**
     * @param $id
     * @Route("/delete/{id}",name="delete")
     */
public function delete($id)
{
    $club=$this->getDoctrine()
        ->getRepository(Classroom::class)
        ->find($id);
$em=$this->getDoctrine()->getManager();
$em->remove($club);
$em->flush();
return  $this->redirectToRoute('lire');
}
//// create////
///
///
    /**
     * @param Request $request
     * @Route("/create",name="create")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
public function create (Request $request)
{//// créer un objet qui
    /// va contenir les données reçues
    $classroom=new Classroom();
    /// récuperer le formulaire dans le controller
$form=$this->
createForm(ClassroomType::class,$classroom);
$form->handleRequest($request);
//si les données du fomulaire sont valides on
// va faire notre persisit
if ($form->isSubmitted()&& ($form->isValid()))
{// doctirne->
   $em=$this->getDoctrine()->getManager();
$em->persist($classroom);
$em->flush();
return $this->redirectToRoute('lire');}
else
{ return
    $this->render
    ('classroom/create.html.twig',
        ['f'=>$form->createView()]);}

}

    /**
     * @Route("/update/{id}",name="modifier")
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
public function update($id, Request $request)
{$objModif=$this->getDoctrine()
    ->getRepository(Classroom::class)
    ->find($id);
$form=$this->createForm
(classroomType::class,$objModif);
$form->handleRequest($request);
if ($form->isSubmitted()&& $form->isValid())
{$em=$this->getDoctrine()->getManager();
$em->flush();
return $this->redirectToRoute('lire');}
else
{ return
    $this->render
    ('classroom/update.html.twig',
        ['f'=>$form->createView()]);}


}
}
