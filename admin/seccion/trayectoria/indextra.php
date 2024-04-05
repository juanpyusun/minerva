<?php include("../../template/header.php");
include ("../../../db.php");
$sentencia=$conexion->prepare("SELECT * FROM `trayectoria_empresas`");
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
        <div class="table-responsive-lg">
            <table
                class="table table-primary table-responsive-lg"
            >
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">empresa1</th>
                        <th scope="col">empresa2</th>
                        <th scope="col">empresa3</th>
                        <th scope="col">empresa4</th>
                        <th scope="col">empresa5</th>
                        <th scope="col">empresa6</th>

                        <th scope="col">empresa7</th>
                        <th scope="col">empresa8</th>
                        <th scope="col">empresa9</th>
                        <th scope="col">empresa10</th>
                        <th scope="col">empresa11</th>
                        <th scope="col">empresa12</th>
                        <th scope="col">empresa13</th>
                        <th scope="col">empresa14</th>
                        
                        <th scope="col">empresa15</th>
                        <th scope="col">empresa16</th>
                        <th scope="col">empresa17</th>
                        <th scope="col">empresa18</th>
                        <th scope="col">empresa19</th>
                        <th scope="col">Acciones</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($objetivos as $key => $value) {?>
                    <tr class="">
                        
                        <td ><?php echo $value['idtr'];?></td>
                        <td><?php echo $value['empresa1'];?></td>
                        <td><?php echo $value['empresa2'];?></td>
                        <td><?php echo $value['empresa3'];?></td>
                        <td><?php echo $value['empresa4'];?></td>
                        <td><?php echo $value['empresa5'];?></td>
                        <td><?php echo $value['empresa6'];?></td>
                        <td><?php echo $value['empresa7'];?></td>
                        <td><?php echo $value['empresa8'];?></td>
                        <td><?php echo $value['empresa9'];?></td>
                        <td><?php echo $value['empresa10'];?></td>
                        <td><?php echo $value['empresa11'];?></td>
                        <td><?php echo $value['empresa12'];?></td>
                        <td><?php echo $value['empresa13'];?></td>
                        <td><?php echo $value['empresa14'];?></td>
                        <td><?php echo $value['empresa15'];?></td>
                        <td><?php echo $value['empresa16'];?></td>
                        <td><?php echo $value['empresa17'];?></td>
                        <td><?php echo $value['empresa18'];?></td>
                        <td><?php echo $value['empresa19'];?></td>

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