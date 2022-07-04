<?php
	// kết nối cơ sở dữ liệu
	class connection{
		// ham ket noi csdl , ket qua tra ve 1 bien -> kieu bien nay la 1 bien object
		public static function getInstance(){
			$hostname = "localhost";
			$database = "project_database";
			$username = "root";
			$password = "";
			// ket noi csdl, tra ve bien object
			$db = new PDO("mysql:host=$hostname;dbname=$database;","$username","$password");
			// lay du lieu theo kieu unicode
			$db->exec("set names utf8");
			// tra ve bien ket noi
			return $db;
		}
	} 
 ?>