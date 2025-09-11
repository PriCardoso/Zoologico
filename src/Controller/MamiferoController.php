<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MamiferoController
{
    #[Route('/', name: 'homepage')]
    public function homepage(): Response
    {
        return new Response('Olá Zoologico!!!');
    }

    #[Route('/mamifero/{animal}', name: 'mamifero_show')]
    public function show(string $animal): Response
    {
        return new Response('Esta é a página de detalhes do Mamífero: ' . $animal);
    }
}
