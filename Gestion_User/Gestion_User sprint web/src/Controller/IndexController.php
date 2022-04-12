<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/" , name = "user")
     */
    public function home()
  {

    return  $this->render('FrontView/index.html.twig');  
  }
  /**
     * @Route("/FrontView/login.html.twig" , name = "login")
     */
    public function login() {
      return  $this->render('FrontView/login.html.twig'); 
    }
}

