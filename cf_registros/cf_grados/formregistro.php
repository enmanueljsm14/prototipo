<?php 
	session_start();
?>
<style>
	.form-control:focus {
		border-bottom: 1px solid #1f91f3 ;
	}
</style>

<form id="formRegistro" class="form-group" action="">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header modal-col-<?php echo $_SESSION['tema']?>">
				<h4 class="modal-title">

					<div class="demo-icon-container">

						<div class="demo-google-material-icon"> <i class="material-icons">add_box</i> <span class="icon-name">Nuevo Registro</span>
						</div>
					</div>

				</h4>
			</div>
			<div class="modal-body ">
				<div class="row">
					<div id="resultadoregistro"></div>
					<div class="col-md-6">
						<b>Descripción</b>
						<div class="input-group">
							<span class="input-group-addon">
         						 <i class="material-icons">mode_edit</i>
       			 			</span>
							<div class="form-line">
								<input type="text" autocomplete="off" required name="val1" id="val1" class="form-control">
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
									<option value="Activo">Activo</option>
									<option value="Inactivo">Inactivo</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden"  required name="accion" id="accion" value="agregar" >
				<button type="submit" id="btnguardar" class="btn btn-primary waves-effect"><i class="fa fa-save"></i> Guardar</button>
				<button type="button" class="btn btn-default waves-effect" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
			</div>
		</div>
	</div>
</form>
<?php  include("../../cf_includes/form.php");?>

<script type="text/javascript">
//**********************************************************//
	$('#formRegistro').validate({
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
			$( "#btnguardar" ).html( '<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Procesando Datos' );
	        $.ajax({
	            url: "cf_registros/cf_grados/controlador.php",
	            type: "post",
	            data: $(form).serialize(),
	            success: function(response) {
	                $('#resultadoregistro').html(response);
					$( "#btnguardar" ).html( '<i class="fa fa-fw -square-o fa-save"></i> Guardar' );
					$( "#formRegistro" )[ 0 ].reset();
	            }            
	        });
    	}
	});
//**********************************************************//
</script>