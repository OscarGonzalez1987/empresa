function agregardatos(id, responsable, contacto, actividad, tiempo, costo, fecha_requerimiento, fecha_entrega, ESTADO){
    cadena = "id=" + id +
    "&responsable=" + responsable +
    "&contacto=" + contacto +
    "&actividad=" + actividad +
    "&tiempo=" + tiempo +
    "&costo=" + costo +
    "&fecha_requerimiento=" + fecha_requerimiento +
    "&fecha_entrega=" + fecha_entrega +
    "&ESTADO=" + ESTADO;

    accion = "insertar";
    mensaje_si = "Cliente agregado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}
function agregaform(datos) {
    d = datos.split('||');
    $('#idu').val(d[0]);
    $('#responsableu').val(d[1]);
    $('#contactou').val(d[2]);
    $('#actividadu').val(d[3]);
    $('#tiempou').val(d[4]);
    $('#costou').val(d[5]);
    $('#fecha_requerimientou').val(d[6]);
    $('#fecha_entregau').val(d[7]);
    $('#ESTADOu').val(d[8]);
}

function modificarCliente(){
    id = $('#idu').val();
    responsable = $('#responsableu').val();
    contacto = $('#contactou').val();
    actividad = $('#actividadu').val();
    tiempo = $('#tiempou').val();
    costo = $('#costou').val();
    fecha_requerimiento = $('#fecha_requerimientou').val();
    fecha_entrega = $('#fecha_entregau').val();
    ESTADO = $('#ESTADOu').val();
    cadena = "id=" + id +
    "&responsable=" + responsable +
    "&contacto=" + contacto +
    "&actividad=" + actividad +
    "&tiempo=" + tiempo +
    "&costo=" + costo +
    "&fecha_requerimiento=" + fecha_requerimiento +
    "&fecha_entrega=" + fecha_entrega +
    "&ESTADO=" + ESTADO;

    accion = "modificar";
    mensaje_si = "Cliente modificado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function preguntarSiNo(id) {
    var opcion = confirm("¿Esta seguro de eliminar el registro?");
    if (opcion == true) {
        alert("El registro será eliminado.");
        eliminarDatos(id);
    } else {
        alert("El proceso de eliminación del registro ha sido cancelado.");
    }
}

function eliminarDatos(id) {
    cadena = "id=" + id;

    accion = "borrar";
    mensaje_si = "Cliente borrado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function a_ajax(cadena, accion, mensaje_si, mensaje_no){
    $.ajax({
        type: "POST",
        url: "../modelo/servicio_sistemas_modelo.php?accion="+accion,
        data: cadena,
        success: function (r){
            if (r == 1) {
            $('#tabla').load('../vista/componentes/vista_servicio_sistemas.php');
                alert(mensaje_si);
            } else {
                alert(mensaje_no);
            }
        }
    });
}
