<meta charset="utf-8">

<?php
	sleep(1);
	session_start();
	require("modelo.php");		
//*********************	POST*************************************************//
	if ( $_POST ) 
	{ 	
		  $usuario=$_SESSION['tuuser'];
		  $fecha=date('Y-m-d');
		  $hora=date("h:i:s");
		  $accion=trim($_POST['accion']);
//*********************	Agregar*************************************//
			if ((!empty($accion))and(preg_match("/^[ agregar]{1,7}$/", $accion)))
			{  
				$val1=trim($_POST['val1']);
				$val2=trim($_POST['val2']);
				$insertar=0;
				$openModal="#openModalRegistro";
			//###validacion de variables en blanco y espacios vacios ##     
				if( 
				   (empty(trim($val1)))or
				   (empty(trim($val2)))
				  )
				{
					$errors[] = "Lo siento esta ingresando datos erroneos.";
					 $insertar=1;
				} 
			//######validacion de caracteres#####
				if (
				  (!preg_match("/^[a-zA-Z0-9\-_áéíóúÁÉÍÓÚñÑÄËÏÖÜäëïöü ]{1,300}$/", $val1))and
				  (!preg_match("/^[a-zA-Z0-9\-_áéíóúÁÉÍÓÚñÑÄËÏÖÜäëïöü., ]{1,300}$/", $val2))
				   )
				{
					$errors[] = "Lo siento esta ingresando datos erroneos.";
					 $insertar=1;
				} 
//************crear el registro en db**********************
				if($insertar==0)
					{		
						$val1=utf8_decode($val1);
						$val2=utf8_decode($val2);
						$values="'$val1','$val2','$usuario','$fecha','$hora'"; 
						$resultado=0;
						$resultado=agregar($values,$resultado);//modelo
							if($resultado==1)
							{	
								
								$messages[] = "El registro ha sido ingresado satisfactoriamente.";
							} else{
								$errors []= "Lo siento algo ha salido mal intenta nuevamente.";
							}
					} 
			} 
//*********	Fin Agregar*****************************//


//**************	Modificar****************************//
			if ((!empty($accion))and(preg_match("/^[ modificar]{1,9}$/", $accion)))
			{
				$val1=trim($_POST['val1']);
				$val2=trim($_POST['val2']);
				$valor=trim($_POST['valor']);
				$modificar=0;
				$openModal="#openModalModificar";
			//###validacion de variables en blanco y espacios vacios ##     
				if( 
				   (empty(trim($val1)))or
				   (empty(trim($val2)))or
				   (empty(trim($valor)))			   
				  )
				{
					$errors[] = "Lo siento esta ingresando datos erroneos.";
					$modificar=1;
				} 
			//######validacion de caracteres#####
				if (
				  (!preg_match("/^[a-zA-Z0-9\-_áéíóúÁÉÍÓÚñÑÄËÏÖÜäëïöü ]{1,300}$/", $val1))and
				  (!preg_match("/^[a-zA-Z0-9\-_áéíóúÁÉÍÓÚñÑÄËÏÖÜäëïöü., ]{1,300}$/", $val2))and
				  (!preg_match("/^[a-zA-Z0-9\-_áéíóúÁÉÍÓÚñÑÄËÏÖÜäëïöü ]{1,300}$/", $valor))
				   )
				{
					$errors[] = "Lo siento esta ingresando datos erroneos.";
					 $modificar=1;
				} 

				if($modificar==0)
					{		
						$val1=utf8_decode($val1);
						$val2=utf8_decode($val2);
						$valor=utf8_decode($valor);
						$resultado=0;
						$resultado=editar($val1,$val2,$valor,$resultado);//modelo
							if($resultado==1)					
							{	
								
								$messages[] = "El registro ha sido actualizado satisfactoriamente.";
							} else{
								$errors []= "Lo siento algo ha salido mal intenta nuevamente.";
							}
					}

			}
//*********************Fin Modificar********************//



	}
//*******************Fin POST**************************//	
	else 
	{
//*********************	GET***********************************//
		 $accion=trim($_GET['accion']);
//*********************	Eliminar**************************************//
			if ((!empty($accion))and(preg_match("/^[ eliminar]{1,8}$/", $accion)))
			{
				 $val1=trim($_GET['val1']);
				    $eliminar=0;
				    if (empty($val1))
				      {
				             $errors[] = "Lo siento se ha generado un  desconocido.";
				             $eliminar=1;
				          } 
				     
				    if (!preg_match("/^[a-zA-Z0-9\-_áéíóúÁÉÍÓÚñÑÄËÏÖÜäëïöü ]{1,300}$/", $val1))
				    {
				        $errors[] = "Lo siento se ha generado un  desconocido.";
				         $eliminar=1;
				    } 
				    if($eliminar==0)
				    {   
				        $val1=utf8_decode($val1);
				        $resultado=0;
						$resultado=borrar($val1,$resultado);//modelo
						  if($resultado==1)       
				          {
				          	$clase_div="alert alert-danger";
				            $messages[] = "El registro ha sido eliminado satisfactoriamente.";
?>
							<script type="text/javascript">
								$("#listado").load("cf_registros/cf_grados/listado.php");
							</script>
<?php
				          } else{
				            $errors []= "Lo siento algo ha salido mal intenta nuevamente.";
				          }
				    }      
				      
			}
//*********************	Fin Eliminar***********************//		 
	}	
//*********************	Fin GET***************************************//


//*********si no cumple ninguna acción	********************//

			if ((empty($accion))or
				((!preg_match("/^[ eliminar]{1,8}$/", $accion))and
				(!preg_match("/^[ modificar]{1,9}$/", $accion))and
				
				(!preg_match("/^[ agregar]{1,7}$/", $accion))))
			{
				$errors []= "Error Desconocido";
			}
//*********Fin si no cumple ninguna acción	***************************//

//*********Mensajes********************************************//
			if (isset($errors))
				{
					$error1="Error";
					foreach ($errors as $error)
						{
							$error;
						}
?>					
				<script type="text/javascript">

					swal("<?php echo $error1 ?>", "<?php echo $error; ?> ", "error");
				</script>
<?php			
				}
				if (isset($messages))
				{
					$message1="Bien hecho";
					foreach ($messages as $message)
					{	
						 $message;
					}
?>					
				<script type="text/javascript">

				swal("<?php echo $message1 ?>", "<?php echo $message; ?> ", "success");
				$("#listado").load("cf_registros/cf_grados/listado.php");
				$("<?php echo $openModal ?>").modal('hide');
				</script>
<?php
				}
//********* Fin Mensajes*********************************//

?>
				
