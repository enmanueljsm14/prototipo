
<?php

	include("../../cf_cong/conectar.php");	
//**********************************************************//    
	function agregar($values,$resultado)
	{				
			
		$tabla="cf_plantel";
		$atributos="cfpl_codigo,cfpl_nombre,cfpl_direccion,cfpl_telefono,cfpl_correo,cfpl_estatus,cfu_codigo,cfpl_fecha,cfpl_hora";
		$servicio=new op;
		$servicio->setDriver();
		$sqlconnect= $servicio->abrirConexion();
		$sql=$servicio->insert($tabla,$atributos,$values);//todo a conectar
		$resultado= $servicio->query($sql);
		$servicio->cerrarConexion($sqlconnect);
		return $resultado;
	}
//**********************************************************//    
	function editar($val1,$val2,$val3,$val4,$val5,$val6,$resultado)
	{				
			
		$tabla="cf_plantel";
		$set="cfpl_nombre='$val2',cfpl_direccion='$val3',cfpl_telefono='$val4',cfpl_correo='$val5',cfpl_estatus='$val6'";
		$condicion="cfpl_codigo='$val1'";
		$servicio=new op;
		$servicio->setDriver();
		$sqlconnect= $servicio->abrirConexion();
		$sql=$servicio->update($tabla,$set,$condicion);
		$resultado= $servicio->query($sql);
		$servicio->cerrarConexion($sqlconnect);
		return $resultado;
	}
//**********************************************************//    		
	function borrar($val1,$resultado)
	{				
		$tabla="cf_plantel";
		$condicion="cfpl_codigo='$val1'";
		$servicio=new op;
		$servicio->setDriver();
		$sqlconnect= $servicio->abrirConexion();
		$sql=$servicio->delete($tabla,$condicion);
		$resultado= $servicio->query($sql);
		$servicio->cerrarConexion($sqlconnect);
		return $resultado;
	}
//**********************************************************//    
                        
?>






