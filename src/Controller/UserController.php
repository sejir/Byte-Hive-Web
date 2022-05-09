<?php

namespace App\Controller;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\UserRepository;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Dompdf\Dompdf;
use Dompdf\Options;
use Gedmo\Sluggable\Util\Urlizer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Mime\Email;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Encoder\EncoderInterface;








class UserController extends AbstractController

{
    /**
     * @Route("/display", name="display", methods={"GET","POST"})
     */
public function allusers(Request $request,UserRepository $userRepository){
    $user = $this->getDoctrine()->getManager()->getRepository(User::class)->findAll();
    $serializer = new Serializer([new ObjectNormalizer()]);
    $formatted = $serializer->normalize($user);
    return new JsonResponse($formatted);
}

/**
     * @Route("/ajouteruser", name="ajout", methods={"GET","POST"})
     */
public function ajouteruser(Request $request,UserRepository $userRepository) {
  $user = new User();
  $email = $request->query->get("email");
  $password = $request->query->get("password");
  $lastname= $request->query->get("lastname");
  $name = $request->query->get("name");
  $profilepicture= $request->query->get("profilepicture");
  $entityManager= $this->getDoctrine()->getManager();

  $user->setEmail($email);
  $user->setPassword($password);
  $user->setLastname($lastname);
  $user->setName($name);
  $user->setProfilepicture($profilepicture);
  $entityManager->persist($user);
  $entityManager->flush();
  $serializer = new Serializer([new ObjectNormalizer()]);
  $formatted = $serializer->normalize($user);

  return new JsonResponse($formatted);

}

/**
     * @Route("/modifieruser", name="modif", methods={"GET","POST"})
     */

public function modifieruser(Request $request,UserRepository $userRepository){
    $entityManager=$this->getDoctrine()->getManager();

    $user = $this->getDoctrine()->getManager()->getRepository(User::class)->find($request->get("id"));
    $user->setEmail($request->get("email"));
    $user->setPassword($request->get("password"));
    $user->setName($request->get("name"));
    $user->setLastname($request->get("lastname"));
    $user->setProfilepicture($request->get("profilepicture"));

    $entityManager->persist($user);
    $entityManager->flush();
    $serializer = new Serializer([new ObjectNormalizer()]);
    $formatted = $serializer->normalize($user);
    return new JsonResponse("User a éte modfié avec succés");
}

/**
     * @Route("/deleteuser", name="delete", methods={"GET","POST"})
     */

public function deleteuser(Request $request) {
   $id = $request->get("id");
   $entityManager = $this->getDoctrine()->getManager();
   $user = $entityManager->getRepository(User::class)->find($id);
   if ($user!=null) {
       $entityManager->remove($user);
       $entityManager->flush();

       $serializer = new Serializer([new ObjectNormalizer()]);
       $formatted = $serializer->normalize("Reclamation a ete supprimé avec succés.");
   }

       return new JsonResponse("id user invalide");
    

   }

 /**
     * @Route("/getPasswordByEmail", name="app_password")
     */
    public function getPasswordByEmail (Request $request) {
        $email = $request->get('email');
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneBy(['email'=>$email]);
        if ($user) {
            $password = $user->getPassword();
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize($password);
            return new JsonResponse($formatted);
                }
                return new Response("user not found!");
    }

   /**
     * @Route("/signin", name="apploginn")
     */
   public function signinAction(Request $request){

    $email = $request->query->get("email");
    $password= $request->query->get("password");
    $em = $this->getDoctrine()->getManager();
    $user = $em->getRepository(User::class)->findOneBy(['email'=>$email]);

    if ($user) {
        if ( $password == $user->getPassword() ) {
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize($user);
            return new JsonResponse($formatted);
     
        }
        else {
            return new Response("password not found");
        }
    }
    else {
        return new Response("user not found");
    } 
      
    }

   

  




     
    /**
     * @Route("/index", name="app_user_index", methods={"GET","POST"})
     */
    public function index(Request $request,UserRepository $userRepository ): Response
    {
        $em = $this->getDoctrine()->getManager();
        
        if($request->isXmlHttpRequest()) {
            $serializer = new Serializer(array(new ObjectNormalizer()));
            $name=$request->get('search');
            $users = $em->getRepository(User::class)->filteruser($name);
            $data = $serializer->normalize($users);
                     return new JsonResponse($data);
        }else{
            $users=$em->getRepository(User::class)->findAll();
            return $this->render('user/index.html.twig',[
                'users'=>$users, 
            ]);
        }

   
    }

     /**
     * @Route("/list", name="userslist", methods={"GET"})
     */
    public function list(UserRepository $userRepository): Response
    {

        
            // Configure Dompdf according to your needs
            $pdfOptions = new Options();
            $pdfOptions->set('defaultFont', 'Arial');
            
            // Instantiate Dompdf with our options
            $dompdf = new Dompdf($pdfOptions);
       
            
            // Retrieve the HTML generated in our twig file
            $html = $this->renderView('user/list.html.twig', [
                'users' => $userRepository->findAll(),
            ]);
            
            // Load HTML to Dompdf
            $dompdf->loadHtml($html);
            
            // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
            $dompdf->setPaper('A4', 'portrait');
    
            // Render the HTML as PDF
            $dompdf->render();
    
            // Output the generated PDF to Browser (force download)
            $dompdf->stream("mypdf.pdf", [
                "Attachment" => true
            ]);  
    }



     /**
     * @Route("/admin", name="admin", methods={"GET"})
     */
    public function indexadmin(UserRepository $userRepository): Response
    {
        return $this->render('admin/adminindex.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }
 /**
     * @Route("/home" , name = "home")
     */
    public function home()
    {
  
      return  $this->render('user/home.html.twig');  
    }
    /**
     * @Route("/" , name = "home2")
     */
    public function home2()
    {
  
      return  $this->render('user/index2.html.twig');  
    }
    /**
     * @Route("/menu" , name = "menu")
     */
    public function Myaccount() {
        return  $this->render('user/menu.html.twig'); 
    }

    /**
     * @Route("/new", name="utlisateur_new", methods={"GET", "POST"})
     */
    public function new(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $passwordEncoder->encodePassword($user, $user->getPassword()));
                $file = $user->getProfilepicture();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                try {
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
           $entityManager = $this->getDoctrine()->getManager();
           $user->setProfilepicture($fileName);
           $entityManager->persist($user);
           $entityManager->flush();
 
           $this->addFlash(
               'info',
               'Account Created Successfully!'
           );

         
          
            return $this->redirectToRoute('home');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/{id}", name="app_user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_user_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, User $user, UserRepository $userRepository,UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
      
        if ($form->isSubmitted() && $form->isValid()) {



             /** @var UploadedFile $uploadedFile */
             $uploadedFile = $form['profilepicture']->getData();
             $destination = $this->getParameter('images_directory');
             $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
             $newFilename = Urlizer::urlize($originalFilename).'-'.uniqid().'.'.$uploadedFile->guessExtension();
             $uploadedFile->move(
                 $destination,
                 $newFilename
             );
             $user->setProfilepicture($newFilename);

            //dd($form['profilepicture']->getData());
            $user->setPassword(
                $passwordEncoder->encodePassword($user, $user->getPassword()));
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user);
            return $this->redirectToRoute('admin');
        }
        return $this->render('admin/index.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
       
    }
    /**
     * @Route("/ban/{id}", name="ban")
     */
    public function ban($id): Response
    {
        $user=$this->getDoctrine()->getRepository(User::class)->find($id);
        $user->setBan(true);
        $user->setActivate(false);
        $this->getDoctrine()->getManager()->flush();
        
        return $this->redirectToRoute('app_user_index');
    }
     /**
     * @Route("activate/{id}", name="activate")
     */
    public function activate($id): Response
    {
        $user=$this->getDoctrine()->getRepository(User::class)->find($id);
        $user->setBan(false);
        $user->setActivate(true);
        $this->getDoctrine()->getManager()->flush();
        
        return $this->redirectToRoute('app_user_index');
    }



    



     
   



}


   


