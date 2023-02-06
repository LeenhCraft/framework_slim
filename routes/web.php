<?php

use App\Controllers\BlogController as Blog;
use App\Controllers\ContactoController;

$app->get('/', 'App\Controllers\HomeController:index');
$app->get('/contacto', ContactoController::class . ':index');
// $app->get('/blog', Blog::class . ':index');
// $app->get('/blog[/{slug}]', Blog::class . ':show');

//grupo de rutas para el blog
$app->group('/blog', function ($group) {
    $group->get('', Blog::class . ':index');
    $group->get('/{slug}', Blog::class . ':show');
});
