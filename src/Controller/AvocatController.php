<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AvocatController extends AbstractController
{
    /**
     * @Route("/avocat", name="app_avocat")
     */
    public function index(): Response
    {
        return $this->render('avocat/index.html.twig', [
            'controller_name' => 'AvocatController',
        ]);
    }
  
    public function create(Request $request)
{
    // build the form ...

    $avocat = new Avocat; 
       $avocat -> setName; 
       
        return $this->render('create.html.twig'); 
    
    }

    // render the template
}

