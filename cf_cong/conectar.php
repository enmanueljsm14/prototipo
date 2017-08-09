<?php
	
//Clase
	class op
    {
// Variables
		var $conn;
		var $db;
		var $user;
		var $password;
		var $Conexion_ID = 0;
        var $Consulta_ID = 0;
		var $charset;
//Metodos
        //**********************************************		
		function setDriver()
		{
			$this->host = "localhost";
			$this->db = "prototipo";
			$this->user = "root";
			$this->password = "";
			$this->charset = "utf-8";
			/*echo ("Cargando Datos para el driver");*/
	    }
//**********abrirConexion********************************************
		function abrirConexion()
        {
				$conn=mysql_connect($this->host,$this->user,$this->password)or die ("No se puede conectar con el servidor");
				mysql_select_db($this->db) or die ("No se puede conectar con la base de datos");
				mysql_set_charset($this->charset);
				
				if($conn == 0){
				echo "Fallo la conexión a la base de datos";
				$sqlerror = mysql_error($conn);
				echo($sqlerror);
				return($sqlerror);
			}else{
			
				return ($conn);
			}	
		}
 //************cerrarConexion*****************************************************		
		function cerrarConexion($conn){
			mysql_close($conn);

		}
//*********INGRESAR***********************************************************
		function insert($tabla,$atributos,$values)
		{
			$sql="INSERT INTO ".$tabla." ( ".$atributos." ) VALUES ( ".$values." )";
			return ($sql);
		}

//*********MODIFICAR************************************************************
 		function update($tabla,$set,$condicion)
		{
			$sql="UPDATE $tabla SET  $set   WHERE  $condicion";
			return($sql);
		}	
//********************ELIMINAR******************************
		function delete($tabla,$condicion)
		{
			$sql= "DELETE FROM $tabla WHERE $condicion";
			return($sql);
		}	
//************LISTAR****************************************************************		
		function select($tabla,$condicion)
		{
			$sql="SELECT  * FROM $tabla WHERE $condicion";
		    return($sql);
		}

//****************mysql_query**************************************
		function query($sql)
 		{ 
  			return mysql_query($sql);
 		}
 		 function fetch_array($resultado)
		 { 
		  	return mysql_fetch_array($resultado);
		 }
		  
		 function num_rows($sql)
		 { 
		 	 return mysql_num_rows($sql);
		 }
		/*
		 function fetch_row($consulta)
		 { 
		 	 return mysql_fetch_row($consulta);
		 }
		 function fetch_assoc($consulta)
		 { 
		 	 return mysql_fetch_assoc($consulta);
		 } */
		 
    }
?>
