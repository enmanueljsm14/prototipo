<?php 
	session_start();
	session_destroy();
	header('Location: ?modulo=login&directorio=inicio&archivo=login');
?>