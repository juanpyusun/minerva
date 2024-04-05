<?php include("../../template/header.php");
include ("../../../db.php");
$sentencia=$conexion->prepare("SELECT * FROM `seguridad_socila`");
$sentencia->execute();
$experiencia_social=$sentencia->fetchAll(PDO::FETCH_ASSOC);
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
                        <th scope="col">Entidad Promotora de Salud</th>
                        <th scope="col">Cual</th>
                        <th scope="col">Fecha Ingreso</th>
                        <th scope="col">Tipo de Afiliado</th>
                        <th scope="col">Fondo de Pensiones</th>
                        <th scope="col">Cual</th>
                        <th scope="col">Fecha de Afiliaciòn</th>
                        <th scope="col">Fondo de Cesantias</th>
                        <th scope="col">cual</th>
                        <th scope="col">Fecha de Afiliaciòn</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($experiencia_social as $key => $value) {?>
                    <tr class="">
                        
                        <td ><?php echo $value['id_seguridad'];?></td>
                        <td><?php echo $value['entidad_salud'];?></td>
                        <td><?php echo $value['cual_salud'];?></td>
                        <td><?php echo $value['fec_ingr'];?></td>
                        <td><?php echo $value['afiliado'];?></td>
                        <td><?php echo $value['pensiones'];?></td>
                        <td><?php echo $value['cual_pensiones'];?></td>
                        <td><?php echo $value['fec_afili'];?></td>
                        <td><?php echo $value['cesantias'];?></td>
                        <td><?php echo $value['cual_cesantias'];?></td>
                        <td><?php echo $value['fec_aficen'];?></td>
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