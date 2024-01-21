<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Homepage extends AbstractController
{
    #[Route('/home ')]
    public function home(): Response
    {
        return $this->render('Home.html.twig');
    }

    #[Route('/ ')]
    public function login(): Response
    {
        return $this->render('Login.html.twig');
    }


    #[Route('/signup')]
    public function signup(): Response
    {
        return $this->render('Signup.html.twig');
    }
    #[Route('/explore')]
    public function explore(): Response
    {
        return $this->render('Explore.html.twig');
    }
}