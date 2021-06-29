<?php

namespace App\Controller;

use App\Entity\Hero;
use App\Entity\Team;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarvelController extends AbstractController
{

    /**
     * @Route ("/", name="welcome")
     */

    public function Intro():Response
    {
        return $this->render('marvel/welcome.html.twig');
    }



    /**
     * @Route ("/heroes", name="home")
     */
    public function index(): Response
    {

        $teams= $this->getDoctrine()->getRepository(Team::class)->findAll();
        $heroes= $this->getDoctrine()->getRepository(Hero::class)->findAll();


        return $this->render('marvel/home.html.twig', [
            'controller_name' => 'MarvelController',
            'teams'=>$teams,

        ]);
    }

    /**
     * @Route ("/heroes/{id}", name="hero_detail", requirements={"id" :"\d+"},
     *     methods= {"GET"})
     */

    public function detail($id, Request $request)
    {

        $heroRepo=$this->getDoctrine()->getRepository(Hero::class);
        $hero=$heroRepo->find($id);


    return $this->render('marvel/detail.html.twig', [
        'hero'=>$hero


    ]);

    }
}
