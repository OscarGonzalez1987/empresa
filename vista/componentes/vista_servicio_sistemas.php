<?php
include_once '../../modelo/conexion.php';
$conn = conexion();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>arreglos</title>
</head>
<div class="row"><br><br><br><br>
    <div>
<center>
<h2>servicio_sistemas</h2>
</center>
<button class="btn btn-primary navbar-left"
               data-toggle="modal"
               data-target="#modalNuevo">
    Agregar servicio_sistemas
    <span class="glyphicon glyphicon-plus"></span>
</button></div>
    <table class="table table-hover table-condensed table-bordered table-responsive">
    <thead>
        <tr>
            <th>id</th>
            <th>responsable</th>
            <th>contacto</th>
            <th>actividad</th>
            <th>tiempo</th>
            <th>costo</th>
            <th>fecha_requerimiento</th>
            <th>fecha_entrega</th>
            <th>ESTADO</th>
        </tr>
   </thead>
    <tbody>
    <?php
    $sql = 'SELECT * FROM servicio_sistemas';
    $result = mysqli_query($conn, $sql);
    WHILE($fila = mysqli_fetch_assoc($result)){
        $datos = $fila['id'] . "||" .
                  $fila['responsable'] . "||" .
                  $fila['contacto'] . "||" .
                  $fila['actividad'] . "||" .
                  $fila['tiempo'] . "||" .
                  $fila['costo'] . "||" .
                  $fila['fecha_requerimiento'] . "||" .
                  $fila['fecha_entrega'] . "||" .
                  $fila['ESTADO'];
    ?>
        <tr>
            <td><?php echo $fila['id']; ?></td>
            <td><?php echo $fila['responsable']; ?></td>
            <td><?php echo $fila['contacto']; ?></td>
            <td><?php echo $fila['actividad']; ?></td>
            <td><?php echo $fila['tiempo']; ?></td>
            <td><?php echo $fila['costo']; ?></td>
            <td><?php echo $fila['fecha_requerimiento']; ?></td>
            <td><?php echo $fila['fecha_entrega']; ?></td>
            <td><?php echo $fila['ESTADO']; ?></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
</div>
</body>
</html>
<?php
mysqli_close($conn);
?>
