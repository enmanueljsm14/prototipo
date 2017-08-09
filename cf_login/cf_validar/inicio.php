<?php
	if ( $_POST )
	{
		session_start();
		include("../../cf_cong/conectar.php");
		$usuario = isset( $_POST[ 'text3' ] ) ? $_POST[ 'text3' ] : '';
		$clave = isset( $_POST[ 'text4' ] ) ? $_POST[ 'text4' ] : '';
		$tabla="cf_usuarios";
	    $condicion="cfu_codigo='$usuario'";
		$servicio=new op;
		$servicio->setDriver();
		$sqlconnect= $servicio->abrirConexion();
		$sql=$servicio->select($tabla,$condicion);
		$resultado= $servicio->query($sql);
		$rowusuario= $servicio->fetch_array($resultado);
		$filausuario= $servicio->num_rows($resultado);
		if ( $filausuario == 0 )
		{
?>
			<script type="text/javascript">
				swal("Lo siento", " Cuenta de usuario no afilida", "error");//success
			</script>
<?php

		} else
		{	
			$condicion="cfu_clave='$clave'";
			$sql=$servicio->select($tabla,$condicion);
			$sqlclave= $servicio->query($sql);
			$rowclave= $servicio->fetch_array($resultado);
			$filaclave= $servicio->num_rows($resultado);
			$codigo = $rowusuario[ 'cfu_codigo' ];
			$tires = $rowusuario[ 'cfu_intentos' ];
			$max = 3;
			if ( $tires < $max )
			{
				if ( $filaclave == 0 )
				{
					$tires = $tires + 1;
					$set="cfu_intentos='$tires'";
					$condicion="cfu_codigo='$codigo'";
					$servicio=new op;
					$servicio->setDriver();
					$sqlconnect= $servicio->abrirConexion();
					$sql=$servicio->update($tabla,$set,$condicion);
					$resultado= $servicio->query($sql);
				
?>
					<script type="text/javascript">
					swal("Error", "Clave Inavlida... ", "error");//success
	                </script>
<?php
				} else
				{
					if($rowusuario['cfu_estatus']=="Activo")
					{
	// YTPT
						if($rowusuario['cfu_perfil']=="Administrador")
						{
							$_SESSION["tuuser"]=$rowusuario["cfu_codigo"];
							$_SESSION['tema']=$rowusuario['cfu_tema'];
							$_SESSION['cedula']=$rowusuario['cfp_cedula'];
						    $_SESSION['perfil']=$rowusuario['cfu_perfil'];
							$_SESSION['acceso']=$rowusuario['cfu_acceso'];
							$_SESSION['privilegios']=$rowusuario['cfu_privilegios'];
							$tires = 0;
							$set="cfu_intentos='$tires'";
							$condicion="cfu_codigo='$usuario'";
							$servicio=new op;
							$servicio->setDriver();
							$sqlconnect= $servicio->abrirConexion();
							$sql=$servicio->update($tabla,$set,$condicion);
							$resultado= $servicio->query($sql);
?>
							<script type="text/javascript">
								swal({
								        title: "Bien hecho",
								        text: "Cargando sus Datos... <i class=\"fa fa-refresh fa-spin\"></i>",
								        html: true,
								        showConfirmButton: false,
								        animation: "slide-from-top",
								        type: "success"
								    });
						  		 setTimeout(function(){location.href="?modulo=registros&directorio=plantel&archivo=inicio"},1500);
							</script>
<?php
						}
// 						if($rowusuario['cfu_perfil']=="Automatizacion")
// 						{
// 							$_SESSION["tuuser"]=$rowusuario["adu_usuario"];
// 							$_SESSION['tema']=$rowusuario['adu_tema'];
// 							$_SESSION['cedula']=$rowusuario['adu_cedula'];
// 						    $_SESSION['perfil']=$rowusuario['cfu_perfil'];
// 							$_SESSION['acceso']=$rowusuario['adu_acceso'];
// 							$_SESSION['privilegios']=$rowusuario['adu_privilegios'];
// 							$tires = 0;
// 							$set="adu_max_attempts='$tires'";
// 							$condicion="adu_usuario='$usuario'";
// 							$servicio=new op;
// 							$servicio->setDriver();
// 							$sqlconnect= $servicio->abrirConexion();
// 							$sql=$servicio->update($tabla,$set,$condicion);
// 							$resultado= $servicio->query($sql);
// ?>
// 							<script type="text/javascript">
// 								swal({
// 								        title: "Operación Exitosa",
// 								        text: "Cargando Datos... <i class=\"fa fa-refresh fa-spin\"></i>",
// 								        html: true,
// 								        showConfirmButton: false,
// 								        animation: "slide-from-top",
// 								        type: "success"
// 								    });

// 						   		setTimeout(function(){location.href="?modulo=inicio&directorio=automatizacion&archivo=inicio"},1500);
// 							</script>
<?php

// 						}

					}else
					{

?>
						<script type="text/javascript">
							swal("Alerta", "Cuenta Inactiva Contactanos", "warning");
						</script>
<?php
					}
				}
			} else
			{
?>
				<script type="text/javascript">
					swal({
				        title: "Alerta",
				        text: "¡Excediste el limite de intentos fallidos! <br><a href=\"?modulo=login&directorio=inicio&archivo=recuperar\">Recupere la Contraseña</a>",
				        html: true,
				        showConfirmButton: true,
				        animation: "slide-from-top",
				        type: "warning"
					});
				
				</script>
<?php
			}

		}

	}
?>