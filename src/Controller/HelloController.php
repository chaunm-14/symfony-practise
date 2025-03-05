<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class HelloController extends AbstractController
{
    #[Route('/hello', name: 'hello')]
    #[IsGranted('ROLE_USER')]
    public function sayHello(): Response
    {
        return new Response('Hello World!');
    }
}