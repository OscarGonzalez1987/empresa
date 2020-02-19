function agregardatos(id, cedula, nombre, apellidos, direccion, telefono, celular, correo, notas, usuario, fecha_registro){
    cadena = "id=" + id +
    "&cedula=" + cedula +
    "&nombre=" + nombre +
    "&apellidos=" + apellidos +
    "&direccion=" + direccion +
    "&telefono=" + telefono +
    "&celular=" + celular +
    "&correo=" + correo +
    "&notas=" + notas +
    "&usuario=" + usuario +
    "&fecha_registro=" + fecha_registro;

    accion = "insertar";
    mensaje_si = "Cliente agregado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}
function agregaform(datos) {
    d = datos.split('||');
    $('#idu').val(d[0]);
    $('#cedulau').val(d[1]);
    $('#nombreu').val(d[2]);
    $('#apellidosu').val(d[3]);
    $('#direccionu').val(d[4]);
    $('#telefonou').val(d[5]);
    $('#celularu').val(d[6]);
    $('#correou').val(d[7]);
    $('#notasu').val(d[8]);
    $('#usuariou').val(d[9]);
    $('#fecha_registrou').val(d[10]);
}

function modificarCliente(){
    id = $('#idu').val();
    cedula = $('#cedulau').val();
    nombre = $('#nombreu').val();
    apellidos = $('#apellidosu').val();
    direccion = $('#direccionu').val();
    telefono = $('#telefonou').val();
    celular = $('#celularu').val();
    correo = $('#correou').val();
    notas = $('#notasu').val();
    usuario = $('#usuariou').val();
    fecha_registro = $('#fecha_registrou').val();
    cadena = "id=" + id +
    "&cedula=" + cedula +
    "&nombre=" + nombre +
    "&apellidos=" + apellidos +
    "&direccion=" + direccion +
    "&telefono=" + telefono +
    "&celular=" + celular +
    "&correo=" + correo +
    "&notas=" + notas +
    "&usuario=" + usuario +
    "&fecha_registro=" + fecha_registro;

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
        url: "../modelo/clientes_modelo.php?accion="+accion,
        data: cadena,
        success: function (r){
            if (r == 1) {
            $('#tabla').load('../vista/componentes/vista_clientes.php');
                alert(mensaje_si);
            } else {
                alert(mensaje_no);
            }
        }
    });
}
