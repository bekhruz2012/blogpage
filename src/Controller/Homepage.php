<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Homepage extends AbstractController
{
    #[Route('/home')]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route('/')]
    public function login(): Response
    {
        return $this->render('Login.html.twig');
    }


    #[Route('/signup')]
    public function signup(): Response
    {
        return $this->render('Signup.html.twig');
    }
    #[Route('/Search')]
    public function Search(): Response
    {
        return $this->render('Search.html.twig');
    }
    #[Route('/addblog')]
    public function addblog(): Response
    {
        return $this->render('Addblog.html.twig');
    }
    #[Route('/profile')]
    public function profile(): Response
    {
        return $this->render('');
    }
    #[Route('/chat')]
    public function chat(): Response
    {
        return $this->render('');
    }
    #[Route('/developer')]
    public function developer(): Response
    {
        return $this->render('');
    }
}