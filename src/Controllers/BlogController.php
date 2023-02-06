<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\BlogModels as modelo;
use Slim\Views\Twig;

class BlogController
{
    public function index(Request $request, Response $response, $args)
    {
        //para usar esto hay que poner el metodo como estatico

        $posts = modelo::select();

        // o tambien se puede instanciar la clase y llamar al metodo, pero no es necesario porque no se usa ningun atributo de la clase

        /*
        $modelo = new modelo();

        $modelo->prueba();
        */

        $view = Twig::fromRequest($request);

        $parametros = [
            'titulo' => "Contactame",
            "categoria" => "Blog.:",
            "posts" => $posts
        ];

        return $view->render($response, '/blog/index.php', $parametros);
    }

    public function show(Request $request, Response $response, $args)
    {
        $post = modelo::one($args['slug']);

        $view = Twig::fromRequest($request);

        $parametros = [
            'titulo' => "Contactame",
            "categoria" => "Blog.:",
            "post" => $post
        ];

        return $view->render($response, '/blog/show.php', $parametros);
    }
}
