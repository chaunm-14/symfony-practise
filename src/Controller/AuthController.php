<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class AuthController extends AbstractController
{

    #[Route('/login', name: 'login', methods: ['POST'])]
    public function login(string $username, string $password)
    {

    }

}