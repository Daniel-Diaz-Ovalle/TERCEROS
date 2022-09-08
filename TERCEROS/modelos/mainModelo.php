<?php
    if($peticionAjax){
    
        require_once "../config/SERVER.php";
    }else{
        require_once "./config/SERVER.php";
    }

    class mainModelo{

        /*FUNCION PARA CONECTAR A LA BASE DE DATOS*/
        protected static function conectar(){

            $conexion = new PDO(SGBD, USER, PASS);

            $conexion->exec("SET CHARACTER SET utf8");
            return $conexion;


        }

        /*FUNCION PARA EJECUTAR CONSULTAS SIMPLES A BBDD*/
        protected static function ejecutar_consulta_simple($consulta){
            $sql= self::conectar()->prepare($consulta);
            $sql->execute();
            return $sql;
        }

        // /* encriptar model0 hash */
        // public function encryption($string){
		// 	$output=FALSE;
		// 	$key=hash('sha256', SECRET_KEY);
		// 	$iv=substr(hash('sha256', SECRET_IV), 0, 16);
		// 	$output=openssl_encrypt($string, METHOD, $key, 0, $iv);
		// 	$output=base64_encode($output);
		// 	return $output;
		// }

        // /* desencriptar model0 hash */
		// protected static function decryption($string){
		// 	$key=hash('sha256', SECRET_KEY);
		// 	$iv=substr(hash('sha256', SECRET_IV), 0, 16);
		// 	$output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
		// 	return $output;
		// }

        // /* FUNCION PARA GENERAR CODIGOS ALEATORIOS  */
        // protected static function generar_codigo_aleatorio($letra, $longitud, $numero){
        //     for($i=1; $i<=$longitud; $i++){
        //         $aleatorio= rand(0,9);
        //         $letra.=$aleatorio;
        //     }
        //     return $letra."-".$numero;
        // }

        /* FUNCION PARA limpiar cadenas  */
        protected static function limpiar_cadena($cadena){
            $cadena=trim($cadena);
            $cadena=stripslashes($cadena);
            $cadena=str_ireplace("<script>", "",$cadena);
            $cadena=str_ireplace("</script>", "",$cadena);
            $cadena=str_ireplace("<script src>", "",$cadena);
            $cadena=str_ireplace("<script type=", "",$cadena);
            $cadena=str_ireplace("SELECT * FROM", "",$cadena);
            $cadena=str_ireplace("DELETE FROM", "",$cadena);
            $cadena=str_ireplace("INSERT INTO", "",$cadena);
            $cadena=str_ireplace("DROP TABLE", "",$cadena);
            $cadena=str_ireplace("DROP DATABASE", "",$cadena);
            $cadena=str_ireplace("TRUNCATE TABLE", "",$cadena);
            $cadena=str_ireplace("SHOW TABLES", "",$cadena);
            $cadena=str_ireplace("SHOW DATABASES", "",$cadena);
            $cadena=str_ireplace("<?PHP", "",$cadena);
            $cadena=str_ireplace("?>", "",$cadena);
            $cadena=str_ireplace("--", "",$cadena);
            $cadena=str_ireplace(">", "",$cadena);
            $cadena=str_ireplace("<", "",$cadena);
            $cadena=str_ireplace("[", "",$cadena);
            $cadena=str_ireplace("]", "",$cadena);
            $cadena=str_ireplace("^", "",$cadena);
            $cadena=str_ireplace("==", "",$cadena);
            $cadena=str_ireplace(";", "",$cadena);
            $cadena=str_ireplace("::", "",$cadena);
            $cadena=str_ireplace("*", "",$cadena);
            $cadena=str_ireplace("+", "",$cadena);
            $cadena=str_ireplace("_", "",$cadena);
            $cadena=stripslashes($cadena); 
            $cadena=trim($cadena);
            return $cadena;
            

    
            
        }

        /* FUNCION PARA VERIFICAR DATOS  */
        protected static function verificar_datos($filtro, $cadena){
            if(preg_match("/^".$filtro."$/",$cadena)){
                return false;

            }else{
                return true;
            }
        }
        /** */
        // /* FUNCION PARA VERIFICAR FECHAS  */
        // protected static function verificar_fecha($fecha){
        //     $valores=explode('-', $fecha);
        //     if(count($valores)==3 && checkdate($valores[1],$valores[2],$valores[0])){

        //         return false;
        //     }else{
        //         //retornamos verdadero porque hay error en la fecha
        //         return true;
        //     }

        // }



        /* FUNCION PARA EL  PAGINADOR DE TABLAS*/
        protected static function paginador_tablas($pagina, $Npaginas,$url,$botones){
            $tabla='<nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">';

            // botones anterior y <<
            if($pagina==1){
                $tabla.='<li class="page-item disabled"><a class="page-link"><i class="fas fa-angle-double-left"></i></a>
                         </li>';
            }else{
                $tabla.='<li class="page-item "><a class="page-link" href="'.$url.'1/"><i class="fas fa-angle-double-left"></i></a></li>

                <li class="page-item "><a class="page-link" href="'.$url.($pagina-1).'/"> Anterior </a>
                </li>';

            }

            // botones paginas 1 2 3 ...


            $ci=0;
            for($i=$pagina;$i<=$Npaginas;$i++)
            {
                if($ci>=$botones){
                    break;
                }

                if ($pagina==$i) {
                    $tabla.=' <li class="page-item "><a class="page-link active" href="'.$url.$i.'/">'.$i.'</a></li>';
                } else {
                    $tabla.=' <li class="page-item "><a class="page-link" href="'.$url.$i.'/">'.$i.'</a></li>';
                }
                $ci++;
                
            }

            

            if($pagina==$Npaginas){
                $tabla.='<li class="page-item disabled"><a class="page-link"> <i class="fas fa-angle-double-right"></i></a>
                         </li>';

            }else{
                $tabla.='<li class="page-item "><a class="page-link" href="'.$url.($pagina+1).'/">Siguiente</a>
                </li>
                
                <li class="page-item "><a class="page-link" href="'.$url.$Npaginas.'/"><i class="fas fa-angle-double-right"></i></a></li>

                ';

            }



            $tabla.='</ul></nav>';
            return $tabla;

        }
        
    }

