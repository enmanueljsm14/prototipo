
<?php

	include("../../cf_cong/conectar.php");	
//**********************************************************//    
	function agregar($values,$resultado)
	{				
			
		$tabla="cf_grados";
		$atributos="cfg_descripcion,cfg_estatus,cfu_codigo,cfg_fecha,cfg_hora";
		$servicio=new op;
		$servicio->setDriver();
		$sqlconnect= $servicio->abrirConexion();
		$sql=$servicio->insert($tabla,$atributos,$values);//todo a conectar
		$resultado= $servicio->query($sql);
		$servicio->cerrarConexion($sqlconnect);
		return $resultado;
	}
//**********************************************************//    
	function editar($val1,$val2,$valor,$resultado)
	{				
			
		$tabla="cf_grados";
		$set="cfg_descripcion='$val1',cfg_estatus='$val2'";
		$condicion="cfg_codigo='$valor'";
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
		$tabla="cf_grados";
		$condicion="cfg_codigo='$val1'";
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






