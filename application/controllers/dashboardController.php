<?php 

	class dashboardController extends bakeItFramework
	{
		
		function __construct()
		{
			//code
		}

		public function index(){
			$data=array();
			switch ($_SESSION['role_number']) {
				case '2':
					$this->view("owner/dashboard");
					break;
				case '3':
					$this->view("bakery_manager/index");
					break;
				case '4':
					echo "Branch Manager yet to get";
					break;
				case '5':
					echo "Cashier yet to get";
					break;
				case '6':
					$this->view("deliveryPerson/dashboardDP");
					break;
				default:
					echo "Error 404!";
					break;
			}
			
		}
	}

 ?>