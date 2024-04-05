<?php include("../../template/header.php");
include ("../../../db.php");
$sentencia=$conexion->prepare("SELECT * FROM `experiencia_laboral`");
$sentencia->execute();
$experiencia_laboral=$sentencia->fetchAll(PDO::FETCH_ASSOC);
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
                        <th scope="col">Nombre ultima o actual empresa</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Jefe inmediato</th>
                        <th scope="col">Fecha ingreso</th>

                        <th scope="col">Fecha retiro</th>
                        <th scope="col">Funciones realizadas</th>
                        <th scope="col">Logros odtenidos</th>
                        <th scope="col">Tipo contrato</th>
                        <th scope="col">Tiempo</th>
                        <th scope="col">Contrato</th>
                        <th scope="col">Cual</th>
                        <th scope="col">Horario</th>
                        
                        <th scope="col">Jornada</th>
                        <th scope="col">Motivo retiro</th>
                        <th scope="col">Acciones</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($experiencia_laboral as $key => $value) {?>
                    <tr class="">
                        
                        <td ><?php echo $value['id_exp'];?></td>
                        <td><?php echo $value['ultima_empresa'];?></td>
                        <td><?php echo $value['direccion'];?></td>
                        <td><?php echo $value['telefono'];?></td>
                        <td><?php echo $value['cargo'];?></td>
                        <td><?php echo $value['jefe_inmediato'];?></td>
                        <td><?php echo $value['fecha_in'];?></td>
                        <td><?php echo $value['fecha_re'];?></td>
                        <td><?php echo $value['funsiones'];?></td>
                        <td><?php echo $value['logros'];?></td>
                        <td><?php echo $value['contrato'];?></td>
                        <td><?php echo $value['tiempo'];?></td>
                        <td><?php echo $value['tipo_contrato'];?></td>
                        <td><?php echo $value['cual'];?></td>
                        <td><?php echo $value['horario'];?></td>
                        <td><?php echo $value['jornada'];?></td>
                        <td><?php echo $value['motivo_retiro'];?></td>

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