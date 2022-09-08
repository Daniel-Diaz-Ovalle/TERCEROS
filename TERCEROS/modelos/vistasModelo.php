<?php

class vistasModelo{
    /*------- modelo para obtener vistas------------*/

    protected static function obtener_vistas_modelo($vistas){
        $lista_blanca =["listado-terceros","sede", "terceros","home"];

        if(in_array($vistas,$lista_blanca))
        {
            if(is_file("./vistas/contenidos/".$vistas."-vista.php")){
                $contenido= "./vistas/contenidos/".$vistas."-vista.php";
            }else{
                $contenido="404";
            }
        }else{
            $contenido="404";

        }
        return $contenido;

    }
}
