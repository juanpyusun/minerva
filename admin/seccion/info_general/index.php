<?php include("../../template/header.php");
include ("../../../db.php");
$sentencia=$conexion->prepare("SELECT * FROM `informacion_general`");
$sentencia->execute();
$lista_inf_general=$sentencia->fetchAll(PDO::FETCH_ASSOC);
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
        <div
            class="table-responsive-sm"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Nacionalidad</th>
                        <th scope="col">Profesion</th>
                        <th scope="col">Años</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($lista_inf_general as $key => $value) {?>
                    <tr class="">
                        <td scope="row">1</td>
                        <td><?php echo $value['nombres'];?></td>
                        <td><?php echo $value['apellidos'];?></td>
                        <td><?php echo $value['direccion'];?></td>
                        <td><?php echo $value['ciudad'];?></td>
                        <td><?php echo $value['correo'];?></td>
                        <td><?php echo $value['nacionalidad'];?></td>
                        <td><?php echo $value['profesion'];?></td>
                        <td><?php echo $value['experiencia'];?></td>
                        <td><?php echo $value['telefono'];?></td>
                        <td><?php echo $value['celular'];?></td>
                        <td><?php echo $value['estado'];?></td>
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