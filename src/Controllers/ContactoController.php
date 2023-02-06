<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class ContactoController
{

    public function index(Request $request, Response $response, $args)
    {
        $view = Twig::fromRequest($request);
        $parametros = [
            'titulo' => "Contactame",
            "categoria" => "contacto",
            'nombre' => 'Juan',
            'apellido' => 'Perez',
            'edad' => 30
        ];
        return $view->render($response, 'contacto.html', $parametros);
    }
}
