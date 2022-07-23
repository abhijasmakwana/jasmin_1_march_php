<?php
include_once('model.php');  // step 1 : model load

class control extends model  // step 2 extend model class in control class
{ 
	function __construct()
	{
		session_start();
		model::__construct(); 
		
		$path=$_SERVER['PATH_INFO']; 			// GET URL PATH 
		
		switch($path)
		{
			
            case '/index':
			include_once('index.php');
			break;
			
			case '/about':
			include_once('about.php');
			break
			
			
			
			case '/login':
			if(isset($_REQUEST['submit']))
			{
				$User_name=$_REQUEST['User_name'];
				$Password=$_REQUEST['Password'];
				//$enc_Pass=md5($Password); 
				
				$where=array("User_name"=>$User_name,"Password"=>$Password);
					
				$res=$this->select_where('client',$where);
				
			    $chk=$res->num_rows; // check cond by row and give ans in true or false
				if($chk==1)  // 1 means true
				{
                    $fetch=$res->fetch_object();
					$_SESSION['Client_id']=$fetch->Client_id;
					$_SESSION['User_name']=$fetch->User_name;			

				    echo "<script>
					
					alert('client login sucess');
					window.location='dashboard';
					</script>";

				}
				else
				{
					echo "<script>
					
					alert('login failed');
					window.location='index';
					</script>";
				}

			}
			include_once('login.php');
			break;
			
		    case '/dashboard':
		    include_once('dashboard.php');
		    break;
			

		   case '/register':
			if(isset($_REQUEST['submit']))
			{
			
				$Name=$_REQUEST['Name'];
				$User_name=$_REQUEST['User_name'];
				$Password=$_REQUEST['Password'];
				$Email=$_REQUEST['Email'];
				$Mobile_no=$_REQUEST['Mobile_no'];
				date_default_timezone_set('asia/calcutta');
				$cur_date_time=date("Y-m-d H:i:s");
				
				$arr=array("Name"=>$Name,
				"User_name"=>$User_name,
				"Password"=>$Password,
				"Email"=>$Email,
				"Mobile_no"=>$Mobile_no,
				"created_dt"=>$cur_date_time,
				"updated_dt"=>$cur_date_time);
				
				$run=$this->insert('client',$arr);
				if($run)
				{
					echo "<script>
					alert('client register success');
					window.location='register.php';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			include_once('register.php');
			break;
			
			case '/contact':
			if(isset($_REQUEST['submit']))
			{
				$Name=$_REQUEST['Name'];
				$Email=$_REQUEST['Email'];
				$Phone_no=$_REQUEST['Phone_no'];
				date_default_timezone_set('asia/calcutta');
				$cur_date_time=date("Y-m-d H:i:s");
				
				$arr=array("Name"=>$Name,
				"Email"=>$Email,
				"Phone_no"=>$Phone_no,
				"created_dt"=>$cur_date_time,
				"updated_dt"=>$cur_date_time);
				
				$run=$this->insert('contact',$arr);
				if($run)
				{
					echo "<script>
					
					alert('contact success');
					window.location='contact';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			include_once('contact.php');
			break;
			
			
			case '/logout':
			unset($_SESSION['Client_id']);
			unset($_SESSION['Name']);
			
			echo "<script>
			alert('Logout success');
			window.location='login';
			</script>";
			break;
			
			case '/manage_car_type':
			$car_type_arr=$this->select('car_type');
			include_once('manage_car_type.php');
			break;
			
			
			case '/profile':
			$Client_id=$_SESSION['Client_id'];
			$where=array("Client_id"=>$Client_id);
			$res=$this->select_where('client',$where);
			$fetch=$res->fetch_object();
			include_once('profile.php');
			break;
			
			
			

            
			case '/add_car_type':
            if(isset($_REQUEST['submit']))
			{
               $Title=$_REQUEST['Title'];
			   date_default_timezone_set('asia/calcutta');
			   $cur_date_time=date("Y-m-d H:i:s");

			    $arr=array("Title"=>$Title,
				"created_dt"=>$cur_date_time,
				"updated_dt"->$cur_date_time);
				 $run=$this->insert('Car_type',$arr);
				if($run)
				{
					echo "<script>
					alert('car_type add success');
					window.location='add_car_type';
					
					
					</script>";
				}
				else
				{
					echo "Not success";
				}
				
           }

			include_once('add_car_type.php');
			break;
			
			
			case '/add_car_adv':
			if(isset($_REQUEST['submit']))
			{
				$Cust_id=$_REQUEST['Cust_id'];
				$Car_no=$_REQUEST['Car_no'];
				$RC_no=$_REQUEST['RC_no'];
				$title=$_REQUEST['Title'];
				$Price=$_REQUEST['price'];
				$Car_status=$_REQUEST['Car_status'];
				
		
				$arr=array("Cust_id"=>$Cust_id,
				"Car_no"=>$Car_no,
				"RC_no"=>$RC_no,
				"Title"=>$title,
				"price"=>$Price,
                "Car_status"=>$Car_status);
				
				$run=$this->insert('car_adv',$arr);
				if($run)
				
					{
						echo "<script>
					
					    alert('car_adv Add success');
					    window.location='add_car_adv';
					    </script>";
					}

				else
				  {
					echo "Not success";
				  }
			}
		    include_once('add_car_adv.php');
			break;
		  
		
            case '/header':
		    include_once('header.php');
		    break;

            case '/footer':
		    include_once('footer.php');
		    break;


			default:
			echo "Page Not Found";
			break;
			
		}
	}
	
}
$obj=new control;
?>