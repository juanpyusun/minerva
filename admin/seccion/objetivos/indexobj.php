<?php include("../../template/header.php");
include ("../../../db.php");
$sentencia=$conexion->prepare("SELECT * FROM `objetivos`");
$sentencia->execute();
$objetivos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
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
                        <th scope="col">Objetivos</th>
                        <th scope="col">Objetivos</th>
                        <th scope="col">Objetivos</th>
                        <th scope="col">Acciones</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($objetivos as $key => $value) {?>
                    <tr class="">
                        
                        <td ><?php echo $value['idob'];?></td>
                        <td><?php echo $value['Objetivos1'];?></td>
                        <td><?php echo $value['Objetivos2'];?></td>
                        <td><?php echo $value['Objetivos3'];?></td>
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