<?php include("../../template/header.php");
include ("../../../db.php");
$sentencia=$conexion->prepare("SELECT * FROM `documentos`");
$sentencia->execute();
$lista_documentos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
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
                        <th scope="col">cedula</th>
                        <th scope="col">Extranjeria</th>
                        <th scope="col">Expedida</th>
                        <th scope="col">Libreta Militar Primera</th>
                        <th scope="col">Libreta Militar segunda</th>
                        <th scope="col">Numero Libreta</th>
                        <th scope="col">Distrito Militar</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($lista_documentos as $key => $value) {?>
                    <tr class="">
                        
                        <td ><?php echo $value['NID'];?></td>
                        <td><?php echo $value['cedula'];?></td>
                        <td><?php echo $value['extranjeria'];?></td>
                        <td><?php echo $value['expedida'];?></td>
                        <td><?php echo $value['libreta militar primera'];?></td>
                        <td><?php echo $value['libreta militar segunda'];?></td>
                        <td><?php echo $value['numero libreta'];?></td>
                        <td><?php echo $value['distrito militar'];?></td>
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