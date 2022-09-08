<?php
    require_once "mainModelo.php";

    class tercerosModelo extends mainModelo{
        /*-------------------MODELO AGREGAR TERCERO  --------------------- */
        protected static function agregar_terceros_modelo($datos)
        {
            $sql=mainModelo::conectar()->prepare("INSERT INTO persona_natural(identificacion,tipo_id,nombre,telefono,direccion,correo,estado)VALUES(:id,:tipo,:nombres,:telefono,:direccion,:correo,:estado)");
            $sql->bindParam(":id",$datos['id']);
            $sql->bindParam(":tipo",$datos['tipo']);
            $sql->bindParam(":nombres",$datos['nombre']);
            $sql->bindParam(":telefono",$datos['telefono']);
            $sql->bindParam(":direccion",$datos['direccion']);
            $sql->bindParam(":correo",$datos['correo']);
            $sql->bindParam(":estado",$datos['estado']);
            $sql->execute();
            return $sql;


        }//FIN MODELO


        // /*-------------------MODELO ELIMINAR USUARIO  --------------------- */
        // protected static function eliminar_usuario($id){
        //     $sql=mainModel::conectar()->prepare("DELETE FROM usuario WHERE usuario_id=:ID");
        //     $sql->bindParam(":ID",$id);
        //     $sql->execute();
        //     return $sql;
        // }

        
    }