<?php

namespace App\Controller;
use App\Entity\Users;
use App\Form\UsersType;
use App\Form\SigninType;
use App\Form\EditformType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends AbstractController
{
    /**
     * @Route("/FrontView/menu", name="menu")
     */
    public function index(): Response
    {
        return $this->render('FrontView/menu.html.twig', [
            'controller_name' => 'UsersController',
        ]);
    }
    /**
     * @Route("/FrontView/Signup", name="signup")
     * @Method ({"GET" , "POST"})
     */
    public function new(Request $request) {
        $users = new Users(); 
        $form = $this->createForm(UsersType::class,$users);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isvalid()){
            
            $users = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($users);
            $entityManager->flush();
            return $this->redirectToRoute('menu');
        }
        return $this->render('FrontView/Signup.html.twig',['form' => $form->createView()]);
    }
     /**
     * @Route("/FrontView/Signup", name="register")
     */

    public function save() {
        $entityManager =$this->getDoctrine()->getManager();
        $users = new Users(); 
        $entityManager->persist($users);
        $entityManager->flush();

    }
     /**
     * @Route("/FrontView/login", name="login")
     * @Method ({"GET" , "POST"})
     */
    public function new1 (Request $request) {
        $users = new Users(); 
        $form = $this->createForm(SigninType::class,$users);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isvalid()){
            $users = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($users);
            $entityManager->flush();
            return $this->redirectToRoute('menu');
        }
        return $this->render('FrontView/login.html.twig',['form' => $form->createView()]);
    }
    /**
     * @Route("/FrontView/account/{id}", name="article_show")
     */
    public function show($id) {
        $users = $this->getDoctrine()->getRepository(Users::class)->find($id);
  
        return $this->render('FrontView/show.html.twig', array('users' => $users));
      }

    /**
     * @Route("/FrontView/edit/{id}", name="edit_account")
     * Method ({"GET", "POST"})
     */
    public function edit(Request $request, $id) {
        $users = new Users();
        $users = $this->getDoctrine()->getRepository(Users::class)->find($id);
  
        $form = $this->createForm(UsersType::class,$users);
  
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
  
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->flush();
  
          return $this->redirectToRoute('menu');
        }
  
        return $this->render('FrontView/edit.html.twig', ['form' => $form->createView()]);
      }
      /**
     * @Route("/FrontView/delete/{id}",name="delete_user")
     * @Method({"DELETE"})
     */
    public function delete(Request $request, $id) {
        $users = $this->getDoctrine()->getRepository(Users::class)->find($id);
  
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($users);
        $entityManager->flush();
  
        $response = new Response();
        $response->send();

        return $this->redirectToRoute('menu');
      }


}
