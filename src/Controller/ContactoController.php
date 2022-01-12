<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactoController extends AbstractController
{
    private $contactos = [

        1 => ["nombre" => "Juan Pérez", "telefono" => "524142432", "email" => "juanp@ieselcaminas.org"],

        2 => ["nombre" => "Ana López", "telefono" => "58958448", "email" => "anita@ieselcaminas.org"],

        5 => ["nombre" => "Mario Montero", "telefono" => "5326824", "email" => "mario.mont@ieselcaminas.org"],

        7 => ["nombre" => "Laura Martínez", "telefono" => "42898966", "email" => "lm2000@ieselcaminas.org"],

        9 => ["nombre" => "Nora Jover", "telefono" => "54565859", "email" => "norajover@ieselcaminas.org"]

    ]; 
    
    /**
     * @Route("/contacto", name="contacto")
     */
    public function index(): Response
    {
        return $this->render('contacto/index.html.twig', [
            'controller_name' => 'ContactoController',
        ]);
    }
    /**
     * @Route("/contacto/{codigo}", name="ficha_contacto")
     */
    public function ficha($codigo): Response
    {
        $resultado = ($this->contactos[$codigo] ?? null);
        if ($resultado) {
            $html = "<ul>"
                    . "<li>" .$codigo . "</li>" 
                    . "<li>" .$resultado['nombre'] . "</li>"
                    . "<li>" .$resultado['telefono'] . "</li>"
                    . "<li>" .$resultado['email'] . "</li>"
                  . "</ul>";
                  return new Response("<html><body>$html</body></html>");
        }else
            return new Response("<html><body>Contacto $codigo no encontrado</body></html>");
    }
    
    
}
