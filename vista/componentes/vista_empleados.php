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
<h2>empleados</h2>
</center>
<button class="btn btn-primary navbar-left"
               data-toggle="modal"
               data-target="#modalNuevo">
    Agregar empleados
    <span class="glyphicon glyphicon-plus"></span>
</button></div>
    <table class="table table-hover table-condensed table-bordered table-responsive">
    <thead>
        <tr>
            <th>id</th>
            <th>cedula</th>
            <th>nombre</th>
            <th>apellidos</th>
            <th>direccion</th>
            <th>telefono</th>
            <th>celular</th>
            <th>correo</th>
            <th>notas</th>
            <th>usuario</th>
            <th>fecha_registro</th>
        </tr>
   </thead>
    <tbody>
    <?php
    $sql = 'SELECT * FROM empleados';
    $result = mysqli_query($conn, $sql);
    WHILE($fila = mysqli_fetch_assoc($result)){
        $datos = $fila['id'] . "||" .
                  $fila['cedula'] . "||" .
                  $fila['nombre'] . "||" .
                  $fila['apellidos'] . "||" .
                  $fila['direccion'] . "||" .
                  $fila['telefono'] . "||" .
                  $fila['celular'] . "||" .
                  $fila['correo'] . "||" .
                  $fila['notas'] . "||" .
                  $fila['usuario'] . "||" .
                  $fila['fecha_registro'];
    ?>
        <tr>
            <td><?php echo $fila['id']; ?></td>
            <td><?php echo $fila['cedula']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['apellidos']; ?></td>
            <td><?php echo $fila['direccion']; ?></td>
            <td><?php echo $fila['telefono']; ?></td>
            <td><?php echo $fila['celular']; ?></td>
            <td><?php echo $fila['correo']; ?></td>
            <td><?php echo $fila['notas']; ?></td>
            <td><?php echo $fila['usuario']; ?></td>
            <td><?php echo $fila['fecha_registro']; ?></td>
            <td>
                <button class="btn btn-warning glyphicon glyphicon-pencil"
                               data-toggle="modal"
                               data-target="#modalEdicion"
                               onclick="agregaform('<?php echo $datos; ?>')">
                </button></td>
            <td>
                <button class="btn btn-danger glyphicon glyphicon-remove"
                           onclick="preguntarSiNo('<?php echo $fila['id']; ?>')">
                </button>
            </td>
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
