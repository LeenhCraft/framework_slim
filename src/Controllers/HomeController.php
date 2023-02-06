<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class HomeController
{
    public function index(Request $request, Response $response, $args)
    {
        $view = Twig::fromRequest($request);
        $parametros = [
            'nombre' => 'Juan',
            'apellido' => 'Perez',
            'edad' => 30,
            "titulo" => "Home",
            'categoria' => 'home'
        ];
        return $view->render($response, 'index.html', $parametros);
    }
}
