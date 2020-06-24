<?php 
	
	class Connect{

		private  static $host = "localhost";
		public  static $name = "db_juan_bosco";
		private  static $user = "root";
		private  static $password = "";
		private static $charset = "utf8";



		public static function conectar(){
			$mysqli = new mysqli(self::$host,self::$user,self::$password,self::$name);	


			$result =$mysqli->query("SET NAMES '".self::$charset)."'";

			return $mysqli;
		}


	}



 ?>

 
