<?php include("../../template/header.php");
include ("../../../db.php");
$sentencia=$conexion->prepare("SELECT * FROM `informacion_familiar`");
$sentencia->execute();
$lista_info_familiar=$sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<br/>
<div class="card-white-500px">
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
                    <th scope="col">id</th>
                        <th scope="col">Nombre esposa(o),compañer@</th>
                        <th scope="col">Profesion Ocupacion u oficio</th>
                        <th scope="col">Empresa donde trabaja</th>
                        <th scope="col">Cargo actual</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Nº de personas que dependen económicamente del solicitante</th>
                        <th scope="col">Parentesco</th>
                        <th scope="col">Edades</th>
                        <th scope="col">Nombre(s) padre</th>
                        <th scope="col">Acciones</th>

                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($lista_info_familiar as $key => $value) {?>
                    <tr class="">
                        
                        <td ><?php echo $value['idif'];?></td>
                        <td><?php echo $value['nonmbre_conyuge'];?></td>
                        <td><?php echo $value['ocupacion'];?></td>
                        <td><?php echo $value['empresa'];?></td>
                        <td><?php echo $value['cargo'];?></td>
                        <td><?php echo $value['direccion'];?></td>
                        <td><?php echo $value['telefono'];?></td>
                        <td><?php echo $value['ciudad'];?></td>
                        <td><?php echo $value['personas acargo'];?></td>
                        <td><?php echo $value['parentesco'];?></td>
                        <td><?php echo $value['edades'];?></td>
                        <td><?php echo $value['nombre padres'];?></td>

                        
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

        <div class="card-body">
        <div
            class="table-responsive-sm"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Profesión, ocupación u oficio padre</th>
                        <th scope="col">Teléfono(s) padre</th>
                        <th scope="col">Nombre(s) madre</th>
                        <th scope="col">Profesión, ocupación u oficio madre</th>
                        <th scope="col">Teléfono( madre)</th>
                        <th scope="col">Nombre(s) hermano(1)</th>
                        <th scope="col">Profesión, ocupación u oficio hermano</th>
                        <th scope="col">Teléfono(s)</th>
                        <th scope="col">Nombre(s) hermano(2)</th>
                        <th scope="col">Profesión, ocupación u oficio</th>
                        <th scope="col">Teléfono(s)</th>
                        <th scope="col">Acciones</th>
                        
                    
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($lista_info_familiar as $key => $value) {?>
                    <tr class="">
                        <td ><?php echo $value['idif'];?></td>
                        <td><?php echo $value['profecion'];?></td>
                        <td><?php echo $value['telefonos'];?></td>
                        <td><?php echo $value['nombre_madre'];?></td>
                        <td><?php echo $value['oficio_madre'];?></td>
                        <td><?php echo $value['telefono_madre'];?></td>
                        <td><?php echo $value['hermanos'];?></td>
                        <td><?php echo $value['ocupacionhermanos'];?></td>
                        <td><?php echo $value['telefonohermanos'];?></td>
                        <td><?php echo $value['hermano2'];?></td>
                        <td><?php echo $value['ocupacionhermanos2'];?></td>
                        <td><?php echo $value['telefonohermanos2'];?></td>
                        
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
        

    </div>
    <div class="card-footer text-muted"></div>
</div>


<?php include("../../template/footer.php");?>