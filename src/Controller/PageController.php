<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/page", name="page")
     */
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/", name="inicio")
     */
    public function inicio(): Response
    {
        // Nota para Aarón: render es un metodo eredado de AbstracController por eso se pone $this
        return $this->render('inicio.html.twig');
    }
}
