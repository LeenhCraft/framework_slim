<?php

namespace App\Models;

use App\Models\MysqlModel;

class BlogModels extends MysqlModel
{
    static $tabla = 'blog_posts';

    static $id = "idpost";
}
