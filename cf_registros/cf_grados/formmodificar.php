<?php
	session_start();
	include("../../cf_cong/conectar.php");	
	$valor=$_GET['valor'];
	$tabla="cf_grados";
    $condicion="cfg_codigo='$valor'";
	$servicio=new op;
	$servicio->setDriver();
	$sqlconnect= $servicio->abrirConexion();
	$sql=$servicio->select($tabla,$condicion);
	$resultado= $servicio->query($sql);
	$registro= $servicio->fetch_array($resultado);
	$servicio->cerrarConexion($sqlconnect);

?>


<style>
	.form-control:focus{
		border-bottom: 1px solid #1f91f3 ;
	}
</style>
<form id="formModificar" class="form-group" action="">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
	<div class="modal-header modal-col-<?php echo $_SESSION['tema']?>">
		<h4 class="modal-title">

			<div class="demo-icon-container">

				<div class="demo-google-material-icon"> <i class="material-icons">edit</i> <span class="icon-name">Modificar Registro  <?php //echo utf8_encode($row['adper_nombre'])?> <?php //echo utf8_encode($row['adper_apellido'])?></span>
				</div>
			</div>

		</h4>
		
	</div>
	<div class="modal-body">
		<div id="resultadoModificar"></div>
		<div class="row">
			<div id="resultadoregistro"></div>
			<input type="hidden"  required name="valor" id="valor" value="<?php echo $valor ?>" >
			<div class="col-md-6">
				<b>Descripción</b>
				<div class="input-group">
					<span class="input-group-addon">
 						 <i class="material-icons">mode_edit</i>
			 			</span>
					<div class="form-line">
						<input type="text" autocomplete="off" required name="val1" id="val1" value="<?php echo utf8_encode($registro['cfg_descripcion']); ?>" class="form-control">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<b>Estatus</b>
				<div class="input-group">
					<span class="input-group-addon">
  						<i class="material-icons">mode_edit</i>
					</span>
    				<div class="form-line">
						<select class="form-control" name="val2" id="val2" required>
						   
						    <option value="">Selecione...</option>
						    <option value="<?php echo utf8_encode($registro['cfg_estatus']); ?>" selected=""><?php echo utf8_encode($registro['cfg_estatus']); ?></option>
							<option value="Activo">Activo</option>
							<option value="Inactivo">Inactivo</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<input type="hidden"  required name="accion" id="accion" value="modificar" >
		<button type="submit" id="btnModificar" class="btn btn-primary waves-effect"><i class="fa fa-save"></i> Guardar Cambios</button>
		<button type="button" class="btn btn-default waves-effect" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
	</div>
</div>
</div>
</form>
<?php  include("../../cf_includes/form.php");?>
<script type="text/javascript">
//**********************************************************//
	$('#formModificar').validate({
		rules: {
         'val1': {required: true}
                        },
		 highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.input-group').append(error);
        },
        submitHandler: function(form) {
			$( "#btnModificar" ).html( '<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Procesando Datos' );
	        $.ajax({
	            url: "cf_registros/cf_grados/controlador.php",
	            type: "post",
	            data: $(form).serialize(),
	            success: function(response) {
	                $('#resultadoregistro').html(response);
					$( "#btnModificar" ).html( '<i class="fa fa-fw -square-o fa-save"></i> Guardar' );
					$( "#formRegistro" )[ 0 ].reset();
	            }            
	        });
    	}
	});
//**********************************************************//
</script>