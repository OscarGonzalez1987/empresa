<?php
include 'conexion.php';
$conn = conexion();

$accion = $_GET['accion'];

if($accion == "insertar"){

    $id = $_POST['id'];
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $notas = $_POST['notas'];
    $usuario = $_POST['usuario'];
    $fecha_registro = $_POST['fecha_registro'];

    $sql="INSERT INTO empleados(
          id, cedula, nombre, apellidos, direccion, telefono, celular, correo, notas, usuario, fecha_registro
          )VALUE(
          '$id', '$cedula', '$nombre', '$apellidos', '$direccion', '$telefono', '$celular', '$correo', '$notas', '$usuario', '$fecha_registro')";

    echo $consulta = mysqli_query($conn, $sql);
}

elseif($accion == "modificar"){

    $id = $_POST['id'];
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $notas = $_POST['notas'];
    $usuario = $_POST['usuario'];
    $fecha_registro = $_POST['fecha_registro'];

    $sql="UPDATE empleados SET
          cedula = '$cedula', 
          nombre = '$nombre', 
          apellidos = '$apellidos', 
          direccion = '$direccion', 
          telefono = '$telefono', 
          celular = '$celular', 
          correo = '$correo', 
          notas = '$notas', 
          usuario = '$usuario', 
          fecha_registro = '$fecha_registro'
          WHERE id = '$id'";

    echo $consulta = mysqli_query($conn, $sql);
}

elseif($accion == "borrar"){

    $id = $_POST['id'];

    $sql = "DELETE FROM empleados
            WHERE id = '$id'";

    echo $consulta = mysqli_query($conn, $sql);
}


?>