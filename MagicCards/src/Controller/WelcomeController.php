<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    #[Route('/', name: 'home', methods: ['GET'])]
    public function indexAction()
    {
        return $this->render('welcome/index.html.twig',
            [ 'welcome' => "J'aime le café" ]
            );
    }
}
