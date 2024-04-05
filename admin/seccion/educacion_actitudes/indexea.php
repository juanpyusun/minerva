<?php include("../../template/header.php");
include ("../../../db.php");
$sentencia=$conexion->prepare("SELECT * FROM `educacion_actitudes`");
$sentencia->execute();
$educacion_actitudes=$sentencia->fetchAll(PDO::FETCH_ASSOC);
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
                    class="table table-primary table-responsive-lg">
                    <thead>
                        <tr>
                        <th scope="col">id</th>
                            <th scope="col">Año finalizado primaria</th>
                            <th scope="col">AÑOS CURSADOS PRIMARIA</th>
                            <th scope="col">TITULO OBTENIDO PRIMARIA</th>
                            <th scope="col">NOMBRE DE LA INSTITUCION PRIMARIA</th>
                            <th scope="col">CIUDAD PRIMARIA</th>
                            <th scope="col">Acciones</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($educacion_actitudes as $key => $value) {?>
                        <tr class="">
                            <td ><?php echo $value['idea'];?></td>
                            <td><?php echo $value['finalizacionpri'];?></td>
                            <td><?php echo $value['cursadospri'];?></td>
                            <td><?php echo $value['titulopri'];?></td>
                            <td><?php echo $value['institupri'];?></td>
                            <td><?php echo $value['ciudadpri'];?></td>
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
<br/>
<div class="card">
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
                        <th scope="col">BACHILLERATO</th>
                        <th scope="col">Año finalizado bachiller</th>
                        <th scope="col">AÑOS CURSADOS BACHILLER</th>
                        <th scope="col">TITULO OBTENIDO BACHILLER</th>
                        <th scope="col">NOMBRE DE LA INSTITUCION BACHILLER</th>
                        <th scope="col">CIUDAD BACHILLER</th> 
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($educacion_actitudes as $key => $value) {?>
                    <tr class="">
                    <td ><?php echo $value['idea'];?></td>
                        <td><?php echo $value['bachillerato'];?></td>
                        <td><?php echo $value['finalizacionbac'];?></td>
                        <td><?php echo $value['cursadosbac'];?></td>
                        <td><?php echo $value['titulobac'];?></td>
                        <td><?php echo $value['institubac'];?></td>
                        <td><?php echo $value['ciudadbac'];?></td>
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
    <br/>
    </div>
    <div class="card-footer text-muted"></div>
</div>

<br/>
<div class="card">
    
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
                            <th scope="col">EDUCACION SUPERIOR</th>
                            <th scope="col">Año finalizado SUPERIOR</th>
                            <th scope="col">AÑOS CURSADOS SUPERIOR</th>
                            <th scope="col">TITULO OBTENIDO SUPERIOR</th>
                            <th scope="col">NOMBRE DE LA INSTITUCION SUPERIOR</th>
                            <th scope="col">CIUDAD SUPERIOR</th>
                            <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($educacion_actitudes as $key => $value) {?>
                    <tr class="">
                    <td ><?php echo $value['idea'];?></td>
                    <td><?php echo $value['educacion_superiorsuperior'];?></td>
                            <td><?php echo $value['finalizacionsup'];?></td>
                            <td><?php echo $value['cursadossup'];?></td>
                            <td><?php echo $value['titulosup'];?></td>
                            <td><?php echo $value['institutosup'];?></td>
                            <td><?php echo $value['ciudadsup'];?></td>
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
    <br/>
    </div>
    <div class="card-footer text-muted"></div>
</div>

<br/>
<div class="card">
    
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
                            <th scope="col">Año finalizado POSGRADO</th>
                            <th scope="col">AÑOS CURSADOS POSGRADO</th>
                            <th scope="col">TITULO OBTENIDO POSGRADO</th>
                            <th scope="col">NOMBRE DE LA INSTITUCION POSGRADO</th>
                            <th scope="col">CIUDAD POSGRADO</th>
                            <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($educacion_actitudes as $key => $value) {?>
                    <tr class="">
                    <td ><?php echo $value['idea'];?></td>
                    <td><?php echo $value['finalizacionpos'];?></td>
                            <td><?php echo $value['cursadospos'];?></td>
                            <td><?php echo $value['titulopos'];?></td>
                            <td><?php echo $value['institutopos'];?></td>
                            <td><?php echo $value['ciudadpos'];?></td>
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
    <br/>
    </div>
    <div class="card-footer text-muted"></div>
</div>

<br/>
<div class="card">
    
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
                            <th scope="col">INTENSIDAD HORARIA</th>
                            <th scope="col">NOMBRE DEL PROGRAMA</th>
                            <th scope="col">INSTITUCION</th>
                            <th scope="col">CURSA ESTUDIOS ACTULMENTE</th>
                            <th scope="col">QUE TIPO DE ESTUDIOS</th>
                            <th scope="col">DURACION</th>
                            <th scope="col">AÑO SEMESTRE QUE CURSA</th>
                            <th scope="col">NOMBRE INSTITUCION</th>
                            <th scope="col">HORARIO</th>
                            <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($educacion_actitudes as $key => $value) {?>
                    <tr class="">
                    <td ><?php echo $value['idea'];?></td>
                            <td><?php echo $value['intensidad'];?></td>
                            <td><?php echo $value['programa'];?></td>
                            <td><?php echo $value['instituto'];?></td>
                            <td><?php echo $value['actualmente'];?></td>
                            <td><?php echo $value['tipo'];?></td>
                            <td><?php echo $value['duracion'];?></td>
                            <td><?php echo $value['cursa'];?></td>
                            <td><?php echo $value['nom_inst'];?></td>
                            <td><?php echo $value['horario'];?></td>
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
    <br/>
    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include("../../template/footer.php");?>