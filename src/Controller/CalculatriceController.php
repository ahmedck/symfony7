<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CalculatriceController extends AbstractController
{
    #[Route('/calculatrice', name: 'app_calculatrice')]
    public function index(Request $request): Response
    {
        $result = null;
        $a = null ;
        $b = null ;

        if($request->isMethod("POST")){
            $a = $request->get("a");
            $b = $request->get("b");
            $op = $request->get("op");
            switch ( $op) {
                case "+":
                    $result  = $a + $b ;
                  break;
                case "-":
                    $result  = $a - $b ;
                  break;
                case "*":
                    $result  = $a * $b ;
                  break;
                  case "/":
                    $result  = $a / $b ;
                  break;
              }
        }



        return $this->render('calculatrice/index.html.twig', [
            'result' => $result,
            'a' => $a,
            'b' => $b
        ]);
    }
}
