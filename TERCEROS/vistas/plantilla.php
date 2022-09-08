<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title> <?php echo COMPANY; ?></title>

    <?php include "./vistas/inc/link.php";?>

</head>
<body>


	<?php 
        $peticionAjax=false;
        require_once "./controladores/vistasControlador.php"; 
        $IV= new vistasControlador();

        $vistas=$IV-> obtener_vistas_controlador();

        if($vistas=="home" || $vistas=="404"){

            require_once "./vistas/contenidos/".$vistas."-vista.php";

        }else{
                $pagina=explode("/",$_GET['vistas']);
                
    ?>
                <!-- Main container -->
                <main class="container">
                    
                    <!-- HEADER -->
                    <?php include "./vistas/inc/header.php";?>

                    <!-- CONTENIDO DE LA PÁGINA -->
                    <section class="contenido">

                        <?php 
                            include $vistas;
                        ?>
                    
                    </section>
                </main>
	<?php

            }
            include "./vistas/inc/script.php";
     ?>

</body>
</html>