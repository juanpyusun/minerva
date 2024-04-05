<?php include("../../template/header.php");
include ("../../../db.php");
$sentencia=$conexion->prepare("SELECT * FROM `otros_conocimientos`");
$sentencia->execute();
$otros_estudios=$sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<br/>
<div class="card">
    <div class="card-header">
    <a
        name=""
        id=""
        class="btn btn-primary"
        href="/pruebaphp/prueba.php"
        role="button"
        >crear</a
    >
    
        
    </div>
    <div class="card-body">
        <div class="table-responsive-lg">
            <table
                class="table table-primary table-responsive-lg"
            >
                <thead>
                    <tr>
                    <th scope="col">id</th>
                        <th scope="col">Sistemas</th>
                        <th scope="col"> programa que maneja1</th>
                        <th scope="col">dominio </th>
                        <th scope="col">programa que maneja2</th>
                        <th scope="col">dominio</th>
                        <th scope="col">programa que maneja</th>
                        <th scope="col">dominio</th>
                        <th scope="col">programa que maneja</th>
                        <th scope="col">dominio</th>
                        <th scope="col">Idiomas</th>
                        <th scope="col">idioma que conoce</th>
                        <th scope="col">dominio</th>
                        <th scope="col">idioma que conoce</th>
                        <th scope="col">dominio</th>
                        <th scope="col">idioma que conoce</th>
                        <th scope="col">dominio</th>
                        <th scope="col">idioma que conoce</th>
                        <th scope="col">dominio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($otros_estudios as $key => $value) {?>
                    <tr class="">
                        
                        <td ><?php echo $value['idoc'];?></td>
                        <td><?php echo $value['sistemas'];?></td>
                        <td><?php echo $value['sistemas1'];?></td>
                        <td><?php echo $value['conocimientos1'];?></td>
                        <td><?php echo $value['sistemas2'];?></td>
                        <td><?php echo $value['conocimientos2'];?></td>
                        <td><?php echo $value['sistemas3'];?></td>
                        <td><?php echo $value['conocimientos3'];?></td>
                        <td><?php echo $value['sistemas4'];?></td>
                        <td><?php echo $value['conocimientos4'];?></td>
                        <td><?php echo $value['idioma'];?></td>
                        <td><?php echo $value['idiomas1'];?></td>
                        <td><?php echo $value['conocimiento_idiomas1'];?></td>
                        <td><?php echo $value['idiomas2'];?></td>
                        <td><?php echo $value['conocimiento_idiomas2'];?></td>
                        <td><?php echo $value['idiomas3'];?></td>
                        <td><?php echo $value['conocimiento_idiomas3'];?></td>
                        <td><?php echo $value['idiomas4'];?></td>
                        <td><?php echo $value['conocimiento_idiomas4'];?></td>

                        <td>
                            <a
                                name=""
                                id=""
                                class="btn btn-danger"
                                href=""
                                role="button"
                                >borrar</a>
                        </td>
                    <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
        

    </div>
    <div class="card-footer text-muted"></div>
</div>