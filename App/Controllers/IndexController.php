<?php 
	namespace App\Controllers;

	class IndexController extends BaseController {

		public function getIndex(){
			return $this->render('../views/main.php');
		}

		public function getLogout(){
			unset($_SESSION[id]);
			unset($_SESSION[password]);
			session_destroy();
			header('Location:'. BASE_URL);
		}

		public function getInfo(){
			return $this->render('../views/info.php');
		}
	}
	
 ?>