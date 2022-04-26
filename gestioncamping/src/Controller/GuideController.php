<?php

namespace App\Controller;

use App\Entity\Guide;
use App\Form\GuideType;


use App\Services\QrcodeService;
use App\Repository\GuideRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class GuideController extends AbstractController
{
    /**
     * @Route("/admin", name="app_guide_admin", methods={"GET","POST"})
     */
    public function Admin(Request $request, GuideRepository $guideRepository): Response
    {
    {
        $em = $this->getDoctrine()->getManager();


        if($request->isXmlHttpRequest()) {
            $serializer = new Serializer(array(new ObjectNormalizer()));
            $nom=$request->get('search');
            $guides = $em->getRepository(guide::class)->filterGuide($nom);
            $data = $serializer->normalize($guides);

            return new JsonResponse($data);
        }else{
            $guides=$em->getRepository(guide::class)->findAll();
            return $this->render('guide_admin/admin.html.twig',[
                'guides'=>$guides,
            ]);
        }

        // $user = $paginator->paginate(

        //   $user,
        // $request->query->getInt('page', 1),/*page number*/
        //   $request->query->getInt('limit', 3)/*limit per page*/
        //   );

        // return $this->render('user/index.html.twig', ['pagination' => $pagination]);
    }
        return $this->render('guide_admin/admin.html.twig', [
            'guides' => $guideRepository->findAll(),

        ]);
    }
    /**
     * @Route("/guide", name="app_guide_index", methods={"GET", "POST"})
     */
    public function index(Request $request,QrcodeService $qrcodeService,GuideRepository $guideRepository): Response
    {

        $qrCode = null;

        $form = $this->createForm(SearchType::class, null);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $guide=$guideRepository->findOneBy(["nom"=>$data]);
            if($guide != null){
                $qrCode = $qrcodeService->qrcode($data);
            }

        }

        return $this->render('guide/index.html.twig', [
            'guides' => $guideRepository->findAll(),
            'form' => $form->createView(),
            'qrCode' => $qrCode
        ]);
    }


    /**
     * @Route("/new", name="app_guide_new", methods={"GET", "POST"})
     */
    public function new(Request $request, GuideRepository $guideRepository): Response
    {
        $guide = new Guide();
        $form = $this->createForm(GuideType::class, $guide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $guideRepository->add($guide);
            return $this->redirectToRoute('app_guide_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('guide/new.html.twig', [
            'guide' => $guide,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/newa", name="app_guide_neww", methods={"GET", "POST"})
     */
    public function newa(Request $request, GuideRepository $guideRepository): Response
    {
        $guide = new Guide();
        $form = $this->createForm(GuideType::class, $guide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $guideRepository->add($guide);
            return $this->redirectToRoute('app_guide_admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('guide_admin/newa.html.twig', [
            'guide' => $guide,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}", name="app_guide_show", methods={"GET"})
     */
    public function show(Guide $guide): Response
    {
        return $this->render('guide/show.html.twig', [
            'guide' => $guide,
        ]);
    }
    /**
     * @Route("/showa/{id}", name="app_guide_showw", methods={"GET"})
     */
    public function showa(Guide $guide): Response
    {

        return $this->render('guide_admin/showa.html.twig', [
            'guide' => $guide,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_guide_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Guide $guide, GuideRepository $guideRepository): Response
    {
        $form = $this->createForm(GuideType::class, $guide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $guideRepository->add($guide);
            return $this->redirectToRoute('app_guide_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('guide/edit.html.twig', [
            'guide' => $guide,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}/edita", name="app_guide_editt", methods={"GET", "POST"})
     */
    public function edita(Request $request, Guide $guide, GuideRepository $guideRepository): Response
    {
        $form = $this->createForm(GuideType::class, $guide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $guideRepository->add($guide);
            return $this->redirectToRoute('app_guide_admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('guide_admin/edita.html.twig', [
            'guide' => $guide,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_guide_delete", methods={"POST"})
     */
    public function delete(Request $request, Guide $guide, GuideRepository $guideRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$guide->getId(), $request->request->get('_token'))) {
            $guideRepository->remove($guide);
        }

        return $this->redirectToRoute('app_guide_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("deletee/{id}", name="app_guide_deletea", methods={"POST"})
     */
    public function deletea(Request $request, Guide $guide, GuideRepository $guideRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$guide->getId(), $request->request->get('_token'))) {
            $guideRepository->remove($guide);
        }

        return $this->redirectToRoute('app_guide_admin', [], Response::HTTP_SEE_OTHER);
    }

}
