<?php

namespace App\Models;

use PDO;

class MysqlModel
{
    protected static $tabla = 'dual'; //tabla por defecto

    //variable protegida para definir el id del modelo
    protected static $id = 'id';

    protected static function execute($query)
    {
        $cnx = new PDO(
            'mysql:host=localhost;dbname=db_blog;charset=utf8mb4',
            'db_leenh',
            '321321'
        );

        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stm = $cnx->prepare($query);

        $resultados = $stm->execute();

        $filas = [];
        while ($r = $stm->fetch(PDO::FETCH_ASSOC)) {
            $filas[] = $r;
        }
        return $filas;
    }


    public static function select()
    {
        $query = "SELECT * FROM " . static::$tabla . " ORDER BY 1 DESC";
        return self::execute($query);
    }

    public static function one($id)
    {
        $query = "SELECT * FROM " . static::$tabla . " WHERE " . static::$id . " = $id";
        $response = self::execute($query);
        return $response[0] ?? null;
    }
}
