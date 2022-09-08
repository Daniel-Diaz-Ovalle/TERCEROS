<?php

$peticionAjax=true;

require_once "../config/APP.php";

if (isset($_POST['id'])) {
    /*-------------------INSTANCIA AL CONTROLADOR --------------------- */
    require_once "../controladores/tercerosControlador.php";
    $ins_usuario =new tercerosControlador();

    /*-------------------agregar un usuario--------------------- */
    if(isset($_POST['id'])){
        echo $ins_usuario->agregar_terceros_controlador();
    }

    
    
}
