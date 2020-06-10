<?php
	$conexion = new mysqli("localhost","kelleyan_experto","Foreverandever098","kelleyan_invitados");
	if(!$conexion){
		echo('No se pudo conectar con la base de datos');
	}else{
		return $conexion;
	}
?>
