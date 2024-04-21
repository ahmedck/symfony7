<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'author' => "Ahmed"
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return new Response("this is my first app V 1.0");
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
    
        ]);
    }

    #[Route('/age', name: 'app_age')]
    public function age(Request $request): Response
    {
        $age = $request->get('age');
        $name = $request->get('name', 'unknow');
        return $this->render('home/age.html.twig', [
            'myage' => $age,
            'myname' => $name
        ]);
    }
}
