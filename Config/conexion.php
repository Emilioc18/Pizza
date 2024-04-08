<?php
class conexion{
    public static function conectar(){
		$a = new PDO("mysql: host=localhost; dbname=piazza; charset=utf8", "root",""); 
		$a->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $a;
	}
}
