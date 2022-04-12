<?php

namespace App\Controller;
use App\Entity\Users;
use App\Form\EditformType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;

class AccountController extends AbstractController
{
    /**
     * @Route("/FrontView/account", name="app_account")
     */
    public function index(): Response
    {
        return $this->render('FrontView/account.html.twig', [
            'controller_name' => 'AccountController',
        ]);
    }
}
