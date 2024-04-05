<?php include("../../template/header.php");
include ("../../../db.php");
$sentencia=$conexion->prepare("SELECT * FROM `referencias_personales`");
$sentencia->execute();
$referencias_personales=$sentencia->fetchAll(PDO::FETCH_ASSOC);
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
                        <th scope="col">Nombre</th>
                        <th scope="col">Ocupacion</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Ocupacion</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Ocupacion</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($referencias_personales as $key => $value) {?>
                    <tr class="">
                        
                        <td ><?php echo $value['id_social'];?></td>
                        <td><?php echo $value['nombre1'];?></td>
                        <td><?php echo $value['ocupacion1'];?></td>
                        <td><?php echo $value['direccion1'];?></td>
                        <td><?php echo $value['telefono1'];?></td>
                        <td><?php echo $value['nombre2'];?></td>
                        <td><?php echo $value['ocupacion2'];?></td>
                        <td><?php echo $value['direccion2'];?></td>
                        <td><?php echo $value['telefono2'];?></td>
                        <td><?php echo $value['nombre3'];?></td>
                        <td><?php echo $value['ocupacion3'];?></td>
                        <td><?php echo $value['direccion3'];?></td>
                        <td><?php echo $value['telefono3'];?></td>
                        <td>
                            <a
                                name=""
                                id=""
                                class="btn btn-danger"
                                href=""
                                role="button"
                                >borrar</a
                            >
                        </td>
                    <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
        

    </div>
    <div class="card-footer text-muted"></div>
</div>


<?php include("../../template/footer.php");?>