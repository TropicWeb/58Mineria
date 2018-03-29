<?php 
	namespace App\Controllers;

	class LoginController extends BaseController {

		public function getIndex(){
			//TEST
			//To test the counter equals $actualDate to a date in AAAA-MM-DD in the line 8 and uncomment it. Comment line 12
			$actualDate = '2018-04-31';
			//
			date_default_timezone_set('America/Caracas');

			//$actualDate = date('Y-m-d',time()); //Get actual date (string in AAAA-MM-DD)
			$actualDate = date_create($actualDate); //Set actual date (type DATE)
			$finalDate = date_create('2018-03-31'); //Set last day (type DATE)
			$days = 0; //Days left

			if($actualDate < $finalDate){				
				//COUNTER ON
				$interval = date_diff($actualDate, $finalDate); //Difference between dates  
				$days += $interval->d;

				return $this->render('../views/counter.php', [
					'days' => $days
				]);

			}else{
				//COUNTER OFF
				return $this->render('../views/login.php', ['error'=>false]);
			}	
		}

		public function postIndex(){
			//Query to find password match
			$sql = 'SELECT id, password, n_entries
				    FROM user
				    WHERE password like :pass';
			$var = $GLOBALS['gbd']->prepare($sql);
			//Query to modify n_entries	
			$sql2 = 'UPDATE user set n_entries = :n WHERE id = :id';
			$var2 = $GLOBALS['gbd']->prepare($sql2);

			//Execute password match
			$var->execute([
					':pass' => $_POST['password']
				]);
			$result = $var->fetchAll();
			

			if(isset($result[0]['id'])){	
				$_SESSION['id'] = $result[0]['id'];
				$_SESSION['password'] = $result[0]['password'];
				$_SESSION['n_entries'] = $result[0]['n_entries'];
				//Execute n-entries update
				$var2->execute([
					':n' => $_SESSION['n_entries']+1,
					':id' => $_SESSION['id']
				]);
				$_SESSION['n_entries'] = $result[0]['n_entries']+1;
				header('Location:' . BASE_URL);	
			}else{
				return $this->render('../views/login.php', ['error' => true]);
			}
			
		}
	}
	
 ?>