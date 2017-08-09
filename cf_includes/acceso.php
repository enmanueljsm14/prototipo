<?php

	$acceso8="";
	$acceso9="";
	$acceso10="";
	$acceso11="";
	$acceso12="";
	$acceso13="";
	$acceso14="";
	$acceso15="";
	$acceso16="";
	$acceso17="";
	$acceso18="";
	$acceso19="";
	$acceso20="";
	$acceso21="";
	$acceso22="";
	$acceso23="";
	$acceso24="";
	$acceso25="";
	$acceso26="";
	$acceso27="";
	$acceso28="";
	$acceso29="";
	$acceso30="";
	$acceso31="";
	$acceso32="";
	$acceso33="";	

//***************Acceso Instalaciones******************/	

	$accesoRegistro1="";
	$accesoRegistro2="";
	$accesoRegistro3="";
	$accesoRegistro4="";
	$accesoRegistro5="";
	$accesoRegistro6="";
	$accesoRegistro7="";

	$valoresInstalaciones=explode(".",$_SESSION['acceso']);
	
	for($i=0;$i<count($valoresInstalaciones);$i++){
		
		if($valoresInstalaciones[$i]=="Registros"){
			$accesoRegistro1=$valoresInstalaciones[$i];
		}
		if($valoresInstalaciones[$i]=="Personal"){
			$accesoRegistro2=$valoresInstalaciones[$i];
		}
		if($valoresInstalaciones[$i]=="Clientes"){
			$accesoRegistro3=$valoresInstalaciones[$i];
		}
		if($valoresInstalaciones[$i]=="Tarifas"){
			$accesoRegistro4=$valoresInstalaciones[$i];
		}
		if($valoresInstalaciones[$i]=="Arrendamientos"){
			$accesoRegistro5=$valoresInstalaciones[$i];
		}
		if($valoresInstalaciones[$i]=="Reportes"){
			$accesoRegistro6=$valoresInstalaciones[$i];
		}
		if($valoresInstalaciones[$i]=="Estadisticas"){
			$accesoRegistro7=$valoresInstalaciones[$i];
		}
		
	}


//***************Acceso Cultivo**********************/	

	$accesoCultivo1="";
	$accesoCultivo2="";
	$accesoCultivo3="";
	$accesoCultivo4="";
	$accesoCultivo5="";
	$accesoCultivo6="";
	$accesoCultivo7="";

	$valoresCultivo=explode(".",$_SESSION['acceso']);
	
	for($i=0;$i<count($valoresCultivo);$i++){
		
		if($valoresCultivo[$i]=="Clientes"){
			$accesoCultivo1=$valoresCultivo[$i];
		}
		if($valoresCultivo[$i]=="Proveedores"){
			$accesoCultivo2=$valoresCultivo[$i];
		}
		if($valoresCultivo[$i]=="Personal"){
			$accesoCultivo3=$valoresCultivo[$i];
		}
		if($valoresCultivo[$i]=="Productos"){
			$accesoCultivo4=$valoresCultivo[$i];
		}
		if($valoresCultivo[$i]=="Inventario"){
			$accesoCultivo5=$valoresCultivo[$i];
		}
		if($valoresCultivo[$i]=="Ventas"){
			$accesoCultivo6=$valoresCultivo[$i];
		}
		if($valoresCultivo[$i]=="Estadisticas"){
			$accesoCultivo7=$valoresCultivo[$i];
		}
		
	}
/******************************Acceso planificacion******************************/

	$accesoPlanificacion1="";
	$accesoPlanificacion2="";
	

		$valoresPresupuesto=explode(".",$_SESSION['acceso']);
	
	for($i=0;$i<count($valoresPresupuesto);$i++){
		
		if($valoresPresupuesto[$i]=="Proveedores"){
			$accesoPlanificacion1=$valoresPresupuesto[$i];
		}
		if($valoresPresupuesto[$i]=="Cotizacion"){
			$accesoPlanificacion2=$valoresPresupuesto[$i];
		}
		
		
	}
/******************************Acceso inscripcion******************************/

	$accesoInscripcion1="";
	

		$valoresPresupuesto=explode(".",$_SESSION['acceso']);
	
	for($i=0;$i<count($valoresPresupuesto);$i++){
		
		if($valoresPresupuesto[$i]=="Proveedores"){
			$accesoInscripcion1=$valoresPresupuesto[$i];
		}
		
		
		
	}
/******************************Acceso Mensualidad******************************/

	$accesoMensualidad1="";
	

		$valoresPresupuesto=explode(".",$_SESSION['acceso']);
	
	for($i=0;$i<count($valoresPresupuesto);$i++){
		
		if($valoresPresupuesto[$i]=="Proveedores"){
			$accesoMensualidad1=$valoresPresupuesto[$i];
		}
		
		
		
	}
/******************************Acceso Mensualidad******************************/

	$accesoReportes1="";
	

		$valoresPresupuesto=explode(".",$_SESSION['acceso']);
	
	for($i=0;$i<count($valoresPresupuesto);$i++){
		
		if($valoresPresupuesto[$i]=="Proveedores"){
			$accesoReportes1=$valoresPresupuesto[$i];
		}
		
		
		
	}
/******************************Acceso Mensualidad******************************/

	$accesoMantenimiento1="";
	

		$valoresPresupuesto=explode(".",$_SESSION['acceso']);
	
	for($i=0;$i<count($valoresPresupuesto);$i++){
		
		if($valoresPresupuesto[$i]=="Proveedores"){
			$accesoMantenimiento1=$valoresPresupuesto[$i];
		}
		
		
		
	}
/******************************************************************************/







	$_SESSION["privilegio1"]="";
	$_SESSION["privilegio2"]="";
	$_SESSION["privilegio3"]="";

	$valores2=explode(".",$_SESSION['privilegios']);
	


	 for($e=0;$e<count($valores2);$e++){
		
		if($valores2[$e]=="Agregar"){
			$_SESSION["privilegio1"]=$valores2[$e];
		}
		if($valores2[$e]=="Modificar"){
			$_SESSION["privilegio2"]=$valores2[$e];
		}
		if($valores2[$e]=="Eliminar"){
			$_SESSION["privilegio3"]=$valores2[$e];
		}
		
	}


	?>