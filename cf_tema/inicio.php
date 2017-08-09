<?php 
	session_start();
	include("../cf_cong/conectar.php");
	$valor=$_GET['valor'];
	$valor2=$_SESSION['tuuser'];
	$tabla="cf_usuarios";
	$set="cfu_tema='$valor'";
	$condicion="cfu_codigo='$valor2'";
	$servicio=new op;
	$servicio->setDriver();
	$sqlconnect= $servicio->abrirConexion();
	$sql=$servicio->update($tabla,$set,$condicion);
	$resultado= $servicio->query($sql);
	$servicio->cerrarConexion($sqlconnect);
	$_SESSION['tema']=$_GET['valor'];
?>




