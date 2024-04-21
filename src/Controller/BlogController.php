<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class BlogController
{

    public function index(): Response
    {
        return new Response(
            '<html><body>this is my blog</body></html>'
        );
    }


    #[Route('/blog/posts/{id}', methods: ['GET'], defaults: ['id' => 1] )]
    public function post($id): Response
    {
        return new Response(
            '<html><body>Post number : '.$id.'</body></html>'
        );
    }

    //Vérifier si le parametre "page" est un entier : requirements: ['page' => '\d+'] 
    #[Route('/blog/page/{page}', name: 'blog_page', requirements: ['page' => '\d+'] , methods: ['GET'])]
    public function blogPage(int $page ): Response
    {
        return new Response("blog page = ".$page ) ;
    }

    public function news($id): Response
    {
        return new Response(
            '<html><body>news number : '.$id.'</body></html>'
        );
    }

    public function newsPaysCategory($pays, $category) : Response
    {
        return new Response("pays=".$pays." category=".$category);
    }

    public function newsPerDates(Request $request) : Response
    {

        $beginDate = $request->get("begindate");
        $endDate = $request->get("enddate");

        return new Response("news between ".$beginDate." and ".$endDate);
    }
}