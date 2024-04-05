<?php include("../../template/header.php");
include ("../../../db.php");
$sentencia=$conexion->prepare("SELECT * FROM `informacion_personal`");
$sentencia->execute();
$lista_inf_personal=$sentencia->fetchAll(PDO::FETCH_ASSOC);
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
                    <th scope="col">id</th>
                        <th scope="col">Esta trabajando actualmente</th>
                        <th scope="col">En que Empresa?</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">tipo contrato</th>
                        <th scope="col">¿Trabajó antes en esta empresa?</th>
                        <th scope="col">¿Solicitó empleo antes en esta empresa?</th>
                        <th scope="col">fecha</th>
                        <th scope="col">¿Lo recomienda alguien de esta empresa?</th>
                        <th scope="col">nombrer</th>
                        <th scope="col">Dependenciar</th>
                        <th scope="col">¿Tiene parientes que trabajan en esta empresa?</th>
                        <th scope="col">Nombrep</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                    <?php
                        foreach ($lista_inf_personal as $key => $value) {?>
                        <td ><?php echo $value['idip'];?></td>
                        <td><?php echo $value['Esta trabajando actualmente'];?></td>
                        <td ><?php echo $value['En que Empresa'];?></td>
                        <td ><?php echo $value['Tipo'];?></td>
                        <td ><?php echo $value['tipo contrato'];?></td>
                        <td ><?php echo $value['Trabajo antes en esta empresa'];?></td>
                        <td ><?php echo $value['Solicito empleo antes en esta empresa'];?></td>
                        <td ><?php echo $value['fecha'];?></td>
                        <td ><?php echo $value['Lo recomienda alguien de esta empresa'];?></td>
                        <td ><?php echo $value['nombrer'];?></td>
                        <td ><?php echo $value['Dependenciar'];?></td>
                        <td ><?php echo $value['Tiene parientes que trabajan en esta empresa'];?></td>
                        <td ><?php echo $value['Nombrep'];?></td>
                        
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
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
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
                    <th scope="col">Dependenciap</th>
                        <th scope="col">¿Cómo tuvo conocimiento de la existencia de la vacante?</th>
                        <th scope="col">Otro</th>
                        <th scope="col">En que ciudad a vivido</th>
                        <th scope="col">En que cuiudad a tabajado</th>
                        <th scope="col">Aceptaria trabajar en otra ciudad</th>
                        <th scope="col">Vive en casa</th>
                        <th scope="col">Nombre arrendador</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Cuanto vive hay</th>
                        <th scope="col">Ingreso adicional</th>
                        <th scope="col">Indique su valor</th>
                        <th scope="col">Acciones</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($lista_inf_personal as $key => $value) {?>
                        <tr class="">
                        <td ><?php echo $value['idip'];?></td>
                        <td><?php echo $value['Dependenciap'];?></td>
                        <td><?php echo $value['Como tuvo conocimiento de la existencia de la vacante'];?></td>
                        <td ><?php echo $value['Otro'];?></td>
                        <td ><?php echo $value['En que ciudad a vivido'];?></td>
                        <td ><?php echo $value['En que cuiudad a tabajado'];?></td>
                        <td ><?php echo $value['Aceptaria trabajar en otra ciudad'];?></td>
                        <td ><?php echo $value['Vive en casa'];?></td>
                        <td ><?php echo $value['Nombre arrendador'];?></td>
                        <td ><?php echo $value['Telefono'];?></td>
                        <td ><?php echo $value['Cuanto vive hay'];?></td>
                        <td ><?php echo $value['Ingreso adicional'];?></td>
                        <td ><?php echo $value['Indique su valor'];?></td>
                        
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
                    <th scope="col">Obligaciones economicas</th>
                        <th scope="col">Conceptos</th>
                        <th scope="col">Obligaciones mensuales</th>
                        <th scope="col">Aficiones</th>
                        <th scope="col">Practica deporte</th>
                        <th scope="col">Cual</th>
                        <th scope="col">Distinciones</th>
                        <th scope="col">Cuald</th>
                        <th scope="col">Pertenece aso,com,dep</th>
                        <th scope="col">Cual,a</th>
                        <th scope="col">Acciones</th>
                        
                    
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($lista_inf_personal as $key => $value) {?>
                        <tr class="">
                    <td ><?php echo $value['idip'];?></td>
                    <td ><?php echo $value['Obligaciones economicas'];?></td>
                        <td ><?php echo $value['Conceptos'];?></td>
                        <td ><?php echo $value['Obligaciones mensuales'];?></td>
                        <td ><?php echo $value['Aficiones'];?></td>
                        <td ><?php echo $value['Practica deporte'];?></td>
                        <td ><?php echo $value['Cual'];?></td>
                        <td ><?php echo $value['Distinciones'];?></td>
                        <td ><?php echo $value['Cuald'];?></td>
                        <td ><?php echo $value['Pertenece aso,com,dep'];?></td>
                        <td ><?php echo $value['Cual,a'];?></td>
                        
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