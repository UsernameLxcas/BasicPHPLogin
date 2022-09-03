<?php
	class Conectar{
		public static function conexion(){
			$conexion = new mysqli("localhost", "root", "1234", "LOGINEXAMPLE");
			$conexion->query("SET NAMES 'utf8'");
			return $conexion;
		}
	}
?>