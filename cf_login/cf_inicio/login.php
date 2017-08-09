<?php include_once("cf_includes/cssgeneral.php"); ?>
	<body class="login-page">
	<br><br>
		<div class="login-box">
			<div class="logo">
				<a href="javascript:void(0);"><b>Prototipo</b></a>
				<small>Aplicacion para el control administrativo</small>
			</div>
			<div class="card">
				<div class="body">
					<div id="resultadologin"></div>
					<form id="sign_in" method="POST">
						
						<div class="input-group">
							<span class="input-group-addon">
	                            <i class="material-icons">person</i>
	                        </span>
						
							<div class="form-line">
								<input type="text" autocomplete="off" class="form-control" name="text3" placeholder="Nombre de Usuario" required autofocus>
							</div>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
	                            <i class="material-icons">lock</i>
	                        </span>
						
							<div class="form-line">
								<input type="password" autocomplete="new-password" class="form-control" name="text4" placeholder="Clave de Ingreso" required>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<button onClick="cerrar()" class="btn btn-block bg-teal waves-effect" type="button"><i class="fa fa-fw -square-o fa-times-circle"></i> Salir</button>
							</div>
							<div class="col-xs-6">
								<button id="buttonlogin" class="btn btn-block bg-teal waves-effect" type="submit"><i class="fa fa-fw -square-o fa-check-circle"></i> Confirmar</button>
							</div>
						</div>
						<div class="row m-t-15 m-b--20">
							<div class="col-xs-12 align-center">
								<a href="?modulo=login&directorio=inicio&archivo=recuperar">Recordar Clave?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
<?php include_once("cf_includes/footer.php"); ?>
<?php include_once("cf_includes/jsgeneral.php"); ?>
<script type="text/javascript">
//**********************************************************//
	$( "#sign_in" ).submit( function ( e ) {
		e.preventDefault();
		$( "#buttonlogin" ).html( '<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span> Cargando' );
		$.ajax( {
			url: "cf_login/cf_validar/inicio.php",
			type: "post",
			data: $( this ).serialize(),
			error: function () {

			},
			success: function ( data ) {
				$( "#resultadologin" ).html( data );
				$( "#buttonlogin" ).html( '<i class="fa fa-fw -square-o fa-check-circle"></i> Confirmar' );
				$( "#sign_in" )[ 0 ].reset();

			}

		} );

	} );
//**********************************************************//
	function cerrar() {
		swal({
	        title: "Vuelve Pronto",
	        text: "Guardando Configuracion... <i class=\"fa fa-refresh fa-spin\"></i>",
	        html: true,
			imageUrl: "images/thumbs-up.png",
	        showConfirmButton: false,
	        animation: ""
	        
	    });
		setTimeout(function(){window.close()},2000);
	}
//**********************************************************//

</script>