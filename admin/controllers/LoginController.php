<?php
	//load file model
	include "models/LoginModel.php";
	class LoginController{
		// ke thua LoginModel
		use LoginModel;
		public function index(){
			// goi view
			return View::make("LoginView.php");
		}
		public function doLogin(){
			// goi ham modelLogin trong class LoginModel
			$this->modelLogin();
		}
		public function logout(){
			// huy bien session
			unset($_SESSION['email']);
			// di chuyen den 1 url khac
			header("location:index.php");
		}
	} 
 ?>