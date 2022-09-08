<?php


    if ($peticionAjax) {
        require_once "../modelos/tercerosModelo.php";
    }else{
        require_once  "./modelos/tercerosModelo.php";
    }

    class tercerosControlador extends tercerosModelo{
        
        /*-------------------CONTROLADOR AGREGAR USUARIO  --------------------- */
        public function agregar_terceros_controlador()
        {
            $id=mainModelo::limpiar_cadena($_POST['id']);
            $tipo=mainModelo::limpiar_cadena($_POST['tipo']);
            $nombre=mainModelo::limpiar_cadena($_POST['nombres']);
            $telefono=mainModelo::limpiar_cadena($_POST['telefono']);
            $direccion=mainModelo::limpiar_cadena($_POST['direccion']);
            $correo=mainModelo::limpiar_cadena($_POST['correo']);

            
            /* ==   comprobar campos vacios  == */

            if ($id== "" || $nombre == "" || $tipo == "" || $telefono == "" || $direccion == "" || $correo == "" ) {
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrió un error inesperado",
                    "Texto"=>"No has llenado todos los campos que son obligatorios",
                    "Tipo"=> "error"
                ];
                echo json_encode($alerta);
                exit();
            
            
            
            }
            $datos_terceros=[
                "id"=>$id,
                "tipo"=>$tipo,
                "nombre"=>$nombre,
                "telefono"=>$telefono,
                "direccion"=>$direccion,
                "correo"=>$correo,
                "estado"=>"Activo"
                
            ];
            $agregar_terceros=tercerosModelo::agregar_terceros_modelo($datos_terceros);
            
            
            if($agregar_terceros->rowCount()==1) {
                
                $alerta=[
                    "Alerta"=>"limpiar",
                    "Titulo"=>"Usuario registrado",
                    "Texto"=>"Los datos del usuario han sido registrados con éxito",
                    "Tipo"=>"success"
                ];    
                echo json_encode($alerta);     
            }else{
            
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrió un error inesperado",
                    "Texto"=>"No hemos podido registrar el usuario",
                    "Tipo"=>"error"
                ];
                echo json_encode($alerta);
            }
            
        } /* fin controlador */

    }
