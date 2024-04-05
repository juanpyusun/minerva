<?php include("../../template/header.php");
include ("../../../db.php");
$sentenciarea=$conexion->prepare("SELECT * FROM `area_empresa`");
$sentenciarea->execute();
$areas=$sentenciarea->fetchAll(PDO::FETCH_ASSOC);
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
                        <th scope="col">Area1</th>
                        <th scope="col">Area2</th>
                        <th scope="col">Area3</th>
                        <th scope="col">Area4</th>
                        <th scope="col">Area5</th>
                        <th scope="col">Area6</th>
                        <th scope="col">Area7</th>
                        <th scope="col">Area8</th>
                        <th scope="col">Area9</th>
                        <th scope="col">Area10</th>
                        <th scope="col">Area11</th>
                        <th scope="col">Area12</th>
                        <th scope="col">Area13</th>
                        <th scope="col">Area14</th>
                        <th scope="col">Area15</th>
                        <th scope="col">Area16</th>
                        <th scope="col">Area17</th>
                        <th scope="col">Area18</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($areas as $key => $value) {?>
                    <tr class="">
                        
                        <td ><?php echo $value['id_area'];?></td>
                        <td><?php echo $value['area1'];?></td>
                        <td><?php echo $value['area2'];?></td>
                        <td><?php echo $value['area3'];?></td>
                        <td><?php echo $value['area4'];?></td>
                        <td><?php echo $value['area5'];?></td>
                        <td><?php echo $value['area6'];?></td>
                        <td><?php echo $value['area7'];?></td>
                        <td><?php echo $value['area8'];?></td>
                        <td><?php echo $value['area9'];?></td>
                        <td><?php echo $value['area10'];?></td>
                        <td><?php echo $value['area11'];?></td>
                        <td><?php echo $value['area12'];?></td>
                        <td><?php echo $value['area13'];?></td>
                        <td><?php echo $value['area14'];?></td>
                        <td><?php echo $value['area15'];?></td>
                        <td><?php echo $value['area16'];?></td>
                        <td><?php echo $value['area17'];?></td>
                        <td><?php echo $value['area18'];?></td>

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
        

    </div>

<div class="card-footer text-muted"></div>
</div>