<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MamiferoController
{
    public function Homepage()
    {
        return new Response(content: 'Olá Mundo!!!');
    }
}
