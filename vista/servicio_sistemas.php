<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
	<title>Clientes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php
	include('librerias.php');
	?>
	<script src="../controlador/funciones_servicio_sistemas.js"></script>
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
			<label>responsable</label>
			<textarea id="responsable" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>contacto</label>
			<textarea id="contacto" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>actividad</label>
			<textarea id="actividad" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>tiempo</label>
			<textarea id="tiempo" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>costo</label>
			<textarea id="costo" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>fecha_requerimiento</label>
			<textarea id="fecha_requerimiento" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>fecha_entrega</label>
			<textarea id="fecha_entrega" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>ESTADO</label>
			<textarea id="ESTADO" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
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
			<label>responsable</label>
			<textarea id="responsableu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>contacto</label>
			<textarea id="contactou" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>actividad</label>
			<textarea id="actividadu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>tiempo</label>
			<textarea id="tiempou" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>costo</label>
			<textarea id="costou" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>fecha_requerimiento</label>
			<textarea id="fecha_requerimientou" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>fecha_entrega</label>
			<textarea id="fecha_entregau" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>ESTADO</label>
			<textarea id="ESTADOu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
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
		$('#tabla').load('componentes/vista_servicio_sistemas.php');
	    });
	</script>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#guardarnuevo').click(function () {
		    id = $('#id').val();
		    responsable = $('#responsable').val();
		    contacto = $('#contacto').val();
		    actividad = $('#actividad').val();
		    tiempo = $('#tiempo').val();
		    costo = $('#costo').val();
		    fecha_requerimiento = $('#fecha_requerimiento').val();
		    fecha_entrega = $('#fecha_entrega').val();
		    ESTADO = $('#ESTADO').val();
		    agregardatos(id, responsable, contacto, actividad, tiempo, costo, fecha_requerimiento, fecha_entrega, ESTADO);
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
