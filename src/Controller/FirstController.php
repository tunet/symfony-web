<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class FirstController
{
    /**
     * @Route("/")
     */
    public function index(): Response
    {
        return new Response('Index page');
    }
}
