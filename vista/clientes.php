<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
	<title>Clientes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php
	include('librerias.php');
	?>
	<script src="../controlador/funciones_clientes.js"></script>
    </head>
    <body id="body">
	<?php
	include 'header.php';
	?>
	<div class="container">
	    <div id="tabla"></div>
	</div>
	<!-- MODAL PARA INSERTAR REGISTROS -->
	<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		    <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title" id="myModalLabel">Agregar cliente</h4>
		    </div>
		    <div class="modal-body">
			<label>id</label>
			<input type="number" id="id" class="form-control input-sm" required="">
			<label>cedula</label>
			<input type="number" id="cedula" class="form-control input-sm" required="">
			<label>nombre</label>
			<textarea id="nombre" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>apellidos</label>
			<textarea id="apellidos" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>direccion</label>
			<textarea id="direccion" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>telefono</label>
			<input type="number" id="telefono" class="form-control input-sm" required="">
			<label>celular</label>
			<input type="number" id="celular" class="form-control input-sm" required="">
			<label>correo</label>
			<textarea id="correo" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>notas</label>
			<textarea id="notas" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>usuario</label>
			<input type="number" id="usuario" class="form-control input-sm" required="">
			<label>fecha_registro</label>
			<input type="date" id="fecha_registro" class="form-control input-sm" required="">
			</div>
		    <div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
			    Agregar
			</button>
		    </div>
		</div>
	    </div>
	</div>
	<!-- MODAL PARA EDICION DE DATOS-->
	<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		    <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
		    </div>
		    <div class="modal-body">
			<input type="number" hidden="" id="idu">
			<label>cedula</label>
			<input type="number" id="cedulau" class="form-control input-sm" required="">
			<label>nombre</label>
			<textarea id="nombreu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>apellidos</label>
			<textarea id="apellidosu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>direccion</label>
			<textarea id="direccionu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>telefono</label>
			<input type="number" id="telefonou" class="form-control input-sm" required="">
			<label>celular</label>
			<input type="number" id="celularu" class="form-control input-sm" required="">
			<label>correo</label>
			<textarea id="correou" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>notas</label>
			<textarea id="notasu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>usuario</label>
			<input type="number" id="usuariou" class="form-control input-sm" required="">
			<label>fecha_registro</label>
			<input type="date" id="fecha_registrou" class="form-control input-sm" required="">
			</div>
		    <div class="modal-footer">
			<button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizadatos">
			    Actualizar
			</button>
		    </div>
		</div>
	    </div>
	</div>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#tabla').load('componentes/vista_clientes.php');
	    });
	</script>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#guardarnuevo').click(function () {
		    id = $('#id').val();
		    cedula = $('#cedula').val();
		    nombre = $('#nombre').val();
		    apellidos = $('#apellidos').val();
		    direccion = $('#direccion').val();
		    telefono = $('#telefono').val();
		    celular = $('#celular').val();
		    correo = $('#correo').val();
		    notas = $('#notas').val();
		    usuario = $('#usuario').val();
		    fecha_registro = $('#fecha_registro').val();
		    agregardatos(id, cedula, nombre, apellidos, direccion, telefono, celular, correo, notas, usuario, fecha_registro);
		});
		$('#actualizadatos').click(function () {
		    modificarCliente();
		});
	    });
	</script>
	<?php
	include './footer.php';
	?>
    </body>
</html>
