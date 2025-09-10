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
}
