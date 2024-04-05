<?php
$url_base="http://localhost/pruebaphp/admin";
?>

<!doctype html>
<html lang="en">
    <head>
        <title>administardor</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
            <nav class="navbar navbar-expand bg-light">
                <div class="nav navbar-nav">
                    <a class="nav-item nav-link active" href="#" aria-current="page"
                        >admin <span class="visually-hidden">(current)</span></a
                    >
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>/seccion/info_general">informacion general</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>/seccion/documentos">Documentos</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>/seccion/info_personal">informacion personal</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>/seccion/info_familiar/indexif.php">informacion familiar</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>/seccion/objetivos/indexobj.php">Objetivos</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>/seccion/trayectoria/indextra.php">Trayectoria</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>/seccion/educacion_actitudes/indexea.php">Educacion y Actitudes</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>/seccion/experiencia_laboral/index_exlaboral.php">Experiencia Laboral</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>/seccion/seguridad_social/index_social.php">Inf Seguridad Social</a>
                    <a class="nav-item nav-link" href="<?php echo $url_base;?>/seccion/referencias_personales/index_reper.php">Referencias personales</a>


                </div>
            </nav>
            
        </header>
        <main>
        