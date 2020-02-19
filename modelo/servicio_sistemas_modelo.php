<?php
include 'conexion.php';
$conn = conexion();

$accion = $_GET['accion'];

if($accion == "insertar"){

    $id = $_POST['id'];
    $responsable = $_POST['responsable'];
    $contacto = $_POST['contacto'];
    $actividad = $_POST['actividad'];
    $tiempo = $_POST['tiempo'];
    $costo = $_POST['costo'];
    $fecha_requerimiento = $_POST['fecha_requerimiento'];
    $fecha_entrega = $_POST['fecha_entrega'];
    $ESTADO = $_POST['ESTADO'];

    $sql="INSERT INTO servicio_sistemas(
          id, responsable, contacto, actividad, tiempo, costo, fecha_requerimiento, fecha_entrega, ESTADO
          )VALUE(
          '$id', '$responsable', '$contacto', '$actividad', '$tiempo', '$costo', '$fecha_requerimiento', '$fecha_entrega', '$ESTADO')";

    echo $consulta = mysqli_query($conn, $sql);
}

elseif($accion == "modificar"){

    $id = $_POST['id'];
    $responsable = $_POST['responsable'];
    $contacto = $_POST['contacto'];
    $actividad = $_POST['actividad'];
    $tiempo = $_POST['tiempo'];
    $costo = $_POST['costo'];
    $fecha_requerimiento = $_POST['fecha_requerimiento'];
    $fecha_entrega = $_POST['fecha_entrega'];
    $ESTADO = $_POST['ESTADO'];

    $sql="UPDATE servicio_sistemas SET
          responsable = '$responsable', 
          contacto = '$contacto', 
          actividad = '$actividad', 
          tiempo = '$tiempo', 
          costo = '$costo', 
          fecha_requerimiento = '$fecha_requerimiento', 
          fecha_entrega = '$fecha_entrega', 
          ESTADO = '$ESTADO'
          WHERE id = '$id'";

    echo $consulta = mysqli_query($conn, $sql);
}

elseif($accion == "borrar"){

    $id = $_POST['id'];

    $sql = "DELETE FROM servicio_sistemas
            WHERE id = '$id'";

    echo $consulta = mysqli_query($conn, $sql);
}


?>