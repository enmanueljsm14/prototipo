<?php

session_start();

$inactivo = 3600; 

if(isset($_SESSION['tiempo']) ) { 
$vida_session = time() - $_SESSION['tiempo']; 
if($vida_session > $inactivo) 
	{ 

		$modulo = "login";
		$carpeta = "validar";
		$archivo = "salir";
		include "cf_" . $modulo . "/" . "cf_" . $carpeta . "/" . $archivo . ".php";

	} 
} 

$_SESSION['tiempo'] = time() ; 

echo'<!DOCTYPE html>
    <html lang="es">';


if ( empty( $_SESSION[ 'tuuser' ] ) ) {if (
	( $_GET[ 'modulo' ] == "login" AND $_GET[ 'directorio' ] == "inicio" AND $_GET[ 'archivo' ] == "login" ) OR
	( $_GET[ 'modulo' ] == "login" AND $_GET[ 'directorio' ] == "inicio" AND $_GET[ 'archivo' ] == "recuperar" )
) {

	session_destroy();
	$modulo = $_GET[ 'modulo' ];
	$carpeta = $_GET[ 'directorio' ];
	$archivo = $_GET[ 'archivo' ];
	include "cf_" . $modulo . "/" . "cf_" . $carpeta . "/" . $archivo . ".php";

} else {

	$modulo = "login";
	$carpeta = "validar";
	$archivo = "salir";
	include "cf_" . $modulo . "/" . "cf_" . $carpeta . "/" . $archivo . ".php";

}} else {
	if($_SESSION['perfil']=="Administrador"){
			if (
		($_GET['modulo']=="inicio" AND $_GET['directorio']=="menu" AND $_GET['archivo']=="inicio")
				OR 
				/***********************************login*****************************************/
		($_GET['modulo']=="login" AND $_GET['directorio']=="inicio" AND $_GET['archivo']=="login")
				OR 
		($_GET['modulo']=="login" AND $_GET['directorio']=="inicio" AND $_GET['archivo']=="recuperar")
				OR 
		($_GET['modulo']=="login" AND $_GET['directorio']=="validar" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="login" AND $_GET['directorio']=="validar" AND $_GET['archivo']=="salida")
				OR 
				/***********************************registros*****************************************/
		($_GET['modulo']=="registros" AND $_GET['directorio']=="maternal" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="registros" AND $_GET['directorio']=="primaria" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="registros" AND $_GET['directorio']=="secundaria" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="registros" AND $_GET['directorio']=="diversificado" AND $_GET['archivo']=="inicio")
				OR
		($_GET['modulo']=="registros" AND $_GET['directorio']=="administrativo" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="registros" AND $_GET['directorio']=="maestros" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="registros" AND $_GET['directorio']=="profesores" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="registros" AND $_GET['directorio']=="representante" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="registros" AND $_GET['directorio']=="grados" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="registros" AND $_GET['directorio']=="plantel" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="registros" AND $_GET['directorio']=="usuarios" AND $_GET['archivo']=="inicio")
				OR  
				/***********************************planificacion*****************************************/
		($_GET['modulo']=="planificacion" AND $_GET['directorio']=="maternal" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="planificacion" AND $_GET['directorio']=="primaria" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="planificacion" AND $_GET['directorio']=="secundaria" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="planificacion" AND $_GET['directorio']=="diversificado" AND $_GET['archivo']=="inicio")
				OR
		($_GET['modulo']=="planificacion" AND $_GET['directorio']=="periodo" AND $_GET['archivo']=="inicio")
				OR  
				/***********************************Inscripcion*****************************************/
		($_GET['modulo']=="inscripcion" AND $_GET['directorio']=="maternal" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="inscripcion" AND $_GET['directorio']=="primaria" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="inscripcion" AND $_GET['directorio']=="secundaria" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="inscripcion" AND $_GET['directorio']=="diversificado" AND $_GET['archivo']=="inicio")
				OR 
				/***********************************Mensualidad*****************************************/
		($_GET['modulo']=="mensualidad" AND $_GET['directorio']=="maternal" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="mensualidad" AND $_GET['directorio']=="primaria" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="mensualidad" AND $_GET['directorio']=="secundaria" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="mensualidad" AND $_GET['directorio']=="diversificado" AND $_GET['archivo']=="inicio")
				OR 
				/***********************************Reportes*****************************************/
		($_GET['modulo']=="reportes" AND $_GET['directorio']=="maternal" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="reportes" AND $_GET['directorio']=="primaria" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="reportes" AND $_GET['directorio']=="secundaria" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="reportes" AND $_GET['directorio']=="diversificado" AND $_GET['archivo']=="inicio")
				OR
				/***********************************Reportes*****************************************/
		($_GET['modulo']=="mantenimiento" AND $_GET['directorio']=="respaldar" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="mantenimiento" AND $_GET['directorio']=="restaurar" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="mantenimiento" AND $_GET['directorio']=="configurar" AND $_GET['archivo']=="inicio")
				
			) {

		$modulo = $_GET[ 'modulo' ];
		$carpeta = $_GET[ 'directorio' ];
		$archivo = $_GET[ 'archivo' ];
		include "cf_" . $modulo . "/" ."cf_" . $carpeta . "/" . $archivo . ".php";

		} else {

		$modulo = "login";
		$carpeta = "validar";
		$archivo = "salir";
		include "cf_" . $modulo . "/" ."cf_" . $carpeta . "/" . $archivo . ".php";

		}
	}
	if($_SESSION['perfil']=="Instalaciones"){
			if (
		($_GET['modulo']=="inicio" AND $_GET['directorio']=="menu" AND $_GET['archivo']=="inicio")
				OR 
				/***********************************Instalaciones*****************************************/
		($_GET['modulo']=="instalaciones" AND $_GET['directorio']=="instalaciones" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="instalaciones" AND $_GET['directorio']=="terrenos" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="instalaciones" AND $_GET['directorio']=="administrativo" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="instalaciones" AND $_GET['directorio']=="obrero" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="instalaciones" AND $_GET['directorio']=="cliente" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="instalaciones" AND $_GET['directorio']=="arrendamiento" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="instalaciones" AND $_GET['directorio']=="tarifas" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="instalaciones" AND $_GET['directorio']=="reportes" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="instalaciones" AND $_GET['directorio']=="estadisticas" AND $_GET['archivo']=="inicio")
				
				/*****************************************Presupuesto*****************************************/
		
			) {

		$modulo = $_GET[ 'modulo' ];
		$carpeta = $_GET[ 'directorio' ];
		$archivo = $_GET[ 'archivo' ];
		include "cf_" . $modulo . "/" ."cf_" . $carpeta . "/" . $archivo . ".php";

		} else {
	
		$modulo = "login";
		$carpeta = "validar";
		$archivo = "salir";
		include "cf_" . $modulo . "/" ."cf_" . $carpeta . "/" . $archivo . ".php";

		}
	}
		if($_SESSION['perfil']=="Cultivo"){
			if (
		($_GET['modulo']=="inicio" AND $_GET['directorio']=="menu" AND $_GET['archivo']=="inicio")
				OR 
				/***********************************Cultivo*****************************************/
		($_GET['modulo']=="cultivo" AND $_GET['directorio']=="clientes" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="cultivo" AND $_GET['directorio']=="inventario" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="cultivo" AND $_GET['directorio']=="administrativo" AND $_GET['archivo']=="inicio")
				OR  
		($_GET['modulo']=="cultivo" AND $_GET['directorio']=="obrero" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="cultivo" AND $_GET['directorio']=="inventarioInsumos" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="cultivo" AND $_GET['directorio']=="inventarioProduccion" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="cultivo" AND $_GET['directorio']=="ventas" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="cultivo" AND $_GET['directorio']=="insumos" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="cultivo" AND $_GET['directorio']=="produccion" AND $_GET['archivo']=="inicio")
				OR  
		($_GET['modulo']=="cultivo" AND $_GET['directorio']=="presentacion" AND $_GET['archivo']=="inicio")
				OR  
		($_GET['modulo']=="cultivo" AND $_GET['directorio']=="proveedores" AND $_GET['archivo']=="inicio")
				OR
		($_GET['modulo']=="cultivo" AND $_GET['directorio']=="siembra" AND $_GET['archivo']=="inicio")
				OR
		($_GET['modulo']=="cultivo" AND $_GET['directorio']=="estadisticas" AND $_GET['archivo']=="inicio")
				
				
				
		
			) {
	
		$modulo = $_GET[ 'modulo' ];
		$carpeta = $_GET[ 'directorio' ];
		$archivo = $_GET[ 'archivo' ];
		include "cf_" . $modulo . "/" ."cf_" . $carpeta . "/" . $archivo . ".php";
		
		} else {
		
		$modulo = "login";
		$carpeta = "validar";
		$archivo = "salir";
		include "cf_" . $modulo . "/" ."cf_" . $carpeta . "/" . $archivo . ".php";
	
		}
	}
		if($_SESSION['perfil']=="Presupuesto"){
			if (
			($_GET['modulo']=="inicio" AND $_GET['directorio']=="menu" AND $_GET['archivo']=="inicio")
				OR 	/*****************************************Presupuesto*****************************************/
		($_GET['modulo']=="presupuesto"  AND  $_GET['directorio']=="registro" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="admin" AND $_GET['directorio']=="clientes" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="admin" AND $_GET['directorio']=="proveedores" AND $_GET['archivo']=="inicio")
				OR 
		($_GET['modulo']=="presupuesto"  AND  $_GET['directorio']=="cotizacion" AND $_GET['archivo']=="inicio")

			) {

		$modulo = $_GET[ 'modulo' ];
		$carpeta = $_GET[ 'directorio' ];
		$archivo = $_GET[ 'archivo' ];
		include "cf_" . $modulo . "/" ."cf_" . $carpeta . "/" . $archivo . ".php";

		} else {

		$modulo = "login";
		$carpeta = "validar";
		$archivo = "salir";
		include "cf_" . $modulo . "/" ."cf_" . $carpeta . "/" . $archivo . ".php";

		}
	}
}

?>
<script>
	if ( navigator.onLine ) {
	} else {
		swal( {
			title: "No hay Conexion a Internet...",
			text: " <a id=\"buttonlogin\" onClick=\"recarga()\" class=\"btn btn block bg-teal waves-effect\" type=\"button\"><i class=\"fa fa-refresh fa-spin\"></i> Recargar la Paguina</a> <p>.</p><p>.</p><p>.</p> <a onClick=\"cerrar2()\" class=\"btn bg-teal waves-effect\" type=\"button\"><i class=\"fa fa-fw -square-o fa-times-circle\"></i> Salir</a>",
			html: true,
			imageUrl: "images/no-wifi.png",
			showConfirmButton: false
				//animation: "slide-from-top"
				//type: "success"
		} );
	}
	function recarga() {
		location.href = "";
	}

	function cerrar2() {
		window.close();
	}
</script>
</body>

</html>