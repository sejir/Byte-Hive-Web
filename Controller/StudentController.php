<?php

namespace App\Controller;
use App\Entity\Student;
use App\Form\StudentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @Route("/student", name="student")
     */
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'controller_name' => 'student',
        ]);
    }

    /**
     * @return Response
     * @Route( "/affiche",name="affiche")
     */

    public function affiche()
    {
        return new Response("bonujour les amis");
    }

    /**
     * @param $name
     * @return Response
     * @Route("/affiche2/{name}",name="affiche2")
     */
    public function affiche1($name)

    { return
        $this->render('student/index.html.twig',
            ['nom'=>$name]);
    }

    /**
     * @return Response
     * @Route("/liste",name="liste")
     */
public function liste():Response
{
   $formations = array(
       array('ref' => 'form147', 'Titre' => 'Formation Symfony
4','Description'=>'formation pratique',
           'date_debut'=>'12/06/2020', 'date_fin'=>'19/06/2020',
           'nb_participants'=>19) ,
       array('ref'=>'form177','Titre'=>'Formation SOA' ,
           'Description'=>'formation
theorique','date_debut'=>'03/12/2020','date_fin'=>'10/12/2020',
           'nb_participants'=>0),
       array('ref'=>'form178','Titre'=>'Formation Angular' ,
           'Description'=>'formation
theorique','date_debut'=>'10/06/2020','date_fin'=>'14/06/2020',
           'nb_participants'=>12));

return
    $this->
    render('student/liste.html.twig',
        ['liste'=>$formations] )
;}


    /**
     * @Route("/readS",name="readS")
     */
public function readS()
{
    $student=$this->getDoctrine()
        ->getRepository
        (Student::class)
        ->findAll();
    return $this
        ->render
        ('student/read.html.twig',
        ['tab'=>$student]);
}




    /**
     * @Route("/createS",name="createS")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
public function create(Request $request)
{$student=new Student();
$form=$this->createForm(StudentType::class,
    $student);
$form->add('envoyer',
    SubmitType::class,
    ['label'=>'ajouter un étudiant']);
$form->handleRequest($request);
if ($form ->isSubmitted()&& $form->isValid() )
{$em=$this->getDoctrine()->getManager();
$em->persist($student);
$em->flush();
return $this->redirectToRoute('readS');}
else

    {
return $this->
render('student/create.html.twig',
    ['form'=>$form->createView()]);
    }

}




}