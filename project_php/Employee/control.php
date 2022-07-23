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
			if(isset($_REQUEST['submit']))
			{
				$Username=$_REQUEST['Username'];
				$Password=$_REQUEST['Password'];
				//$enc_Pass=md5($Password); 
				
				$where=array("Username"=>$Username,"Password"=>$Password);
					
				$res=$this->select_where('employee',$where);
				
			    $chk=$res->num_rows; // check cond by row and give ans in true or false
				if($chk==1)  // 1 means true
				{
                    $fetch=$res->fetch_object();
					$_SESSION['Employee_id']=$fetch->Employee_id;
					$_SESSION['Username']=$fetch->Username;			

				    echo "<script>
					
					alert('Login sucess');
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
			include_once('index.php');
			break;
			
		    case '/dashboard':
		    include_once('dashboard.php');
		    break;
			
			
		    case '/Employee_logout':
			
			unset($_SESSION['Employee_id']);
			unset($_SESSION['Username']);
			echo "<script>
			alert('Logout success');
			window.location='index';
			</script>";
			break;
              
			case '/manage_car_type':
			$car_type_arr=$this->select('car_type');
			include_once('manage_car_type.php');
			break;
            
			case '/manage_booking':
			$booking_arr=$this->select('booking');
			include_once('manage_booking.php');
			break;


		    case '/manage_client':
			$client_arr=$this->select('client');
			include_once('manage_client.php');
			break;
			
			 case '/manage_contact':
			$contact_arr=$this->select('contact');
			include_once('manage_contact.php');
			break;
            
			
			case '/manage_car_adv':
			$car_adv_arr=$this->select('car_adv');
			include_once('manage_car_adv.php');
			break;

           			
			 case '/delete':
			 if(isset($_REQUEST['btn_Cartype_id']))
			{
				$Cartype_id	=$_REQUEST['btn_Cartype_id'];
				$where=array("Cartype_id"=>$Cartype_id);
				$res=$this->delete_where('car_type',$where);
				if($res)
				{
					echo "<script>
					alert('Car_type Delete success');
					window.location='manage_car_type';
					</script>";
				}
			}

           
			
			case '/delete':
			if(isset($_REQUEST['btn_Caradv_id']))
			{
				$Caradv_id=$_REQUEST['btn_Caradv_id'];
				$where=array("Caradv_id"=>$Caradv_id);
				$res=$this->delete_where('car_adv',$where);
				if($res)
				{
					echo "<script>
					alert('car_adv Delete success');
					window.location='manage_car_adv';
					</script>";
				}
			}
		    
			
			 case '/delete':
			 if(isset($_REQUEST['btn_Client_id']))
			{
				$Client_id=$_REQUEST['btn_Client_id'];
				$where=array("Client_id"=>$Client_id);
				$res=$this->delete_where('client',$where);
				if($res)
				{
					echo "<script>
					alert('client Delete success');
					window.location='manage_client';
					</script>";
				}
			}
			
			case '/delete':
			if(isset($_REQUEST['btn_Booking_id']))
			{
				$Booking_id=$_REQUEST['btn_Booking_id'];
				$where=array("Booking_id"=>$Booking_id);
				$res=$this->delete_where('booking',$where);
				if($res)
				{
					echo "<script>
					alert('booking Delete success');
					window.location='manage_booking';
					</script>";
				}
			}
			
			case '/delete':
			if(isset($_REQUEST['btn_Contact_id']))
			{
				$Contact_id=$_REQUEST['btn_Contact_id'];
				$where=array("Contact_id"=>$Contact_id);
				$res=$this->delete_where('contact',$where);
				if($res)
				{
					echo "<script>
					alert('Contact Delete success');
					window.location='manage_contact';
					</script>";
				}
			}
			break;
			

           
		   	case '/profile':
			$Employee_id=$_SESSION['Employee_id'];
			$where=array("Employee_id"=>$Employee_id);
			$res=$this->select_where('employee',$where);
			$fetch=$res->fetch_object();
			include_once('profile.php');
			break;
			
			
			case '/edit_employee':
		
			if(isset($_REQUEST['btn_Employee_id']))
			{
				$Employee_id=$_REQUEST['btn_Employee_id'];
				$where=array("Employee_id"=>$Employee_id);
				$res=$this->select_where('employee',$where);
				$fetch=$res->fetch_object();	
				
				
				if(isset($_REQUEST['update']))
				{
					$Employee_id=$_REQUEST['Employee_id'];
					$First_name=$_REQUEST['First_name'];
					$Last_name=$_REQUEST['Last_name'];
					$Gender=$_REQUEST['Gender'];
					$Email=$_REQUEST['Email'];
					$Mobile_no=$_REQUEST['Mobile_no'];
					
				          
					     $arr=array("Employee_id"=>$Employee_id,
					    "First_name"=>$First_name,
						"Last_name"=>$Last_name,
						"Gender"=>$Gender,
						"Email"=>$Email,
						"Mobile_no"=>$Mobile_no);
						
						$res=$this->update_where('employee',$arr,$where);
						if($res)
						{
						
							echo "<script>
					
					          alert('update	success');
					          window.location='profile';
					          </script>";
						}
				}
				
				
			}
			include_once('edit_employee.php');
			break;
			
			
		    case '/status':
			if(isset($_REQUEST['status_Client_id']))
			{
				$Client_id=$_REQUEST['status_Client_id'];
				$where=array("Client_id"=>$Client_id);
				$run=$this->select_where('client',$where);
				$fetch=$run->fetch_object();
				$status=$fetch->status;
				
				if($status=="Block")
				{
					$arr=array("status"=>"Unblock");
					$res=$this->update_where('client',$arr,$where);
					if($res)
					{
						echo "<script>
						alert('client Unblock success');
						window.location='manage_client';
						</script>";
					}
				}
				else
				{
					$arr=array("status"=>"Block");
					$res=$this->update_where('client',$arr,$where);
					if($res)
					{
						unset($_SESSION['Client_id']);
						unset($_SESSION['User_name']);
						
						echo "<script>
						alert('client Block success');
						window.location='manage_client';
						</script>";
						
						
					}
				}
			}
			
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
					
					alert('Contact success');
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
			
			case '/register':
			if(isset($_REQUEST['submit']))
			{
				$Employee_id=$_REQUEST['Employee_id'];
				$Username=$_REQUEST['Username'];
				$Password=$_REQUEST['Password'];
				$Email=$_REQUEST['Email'];
				$Mobile_no=$_REQUEST['Mobile_no'];
				date_default_timezone_set('asia/calcutta');
				$cur_date_time=date("Y-m-d H:i:s");
				
				$arr=array("Employee_id"=>$Employee_id,
				"Username"=>$Username,
				"Password"=>$Password,
				"Email"=>$Email,
				"Mobile_no"=>$Mobile_no,
			    "created_dt"=>$cur_date_time,
				"updated_dt"=>$cur_date_time);
				
				$run=$this->insert('employee',$arr);
				if($run)
				{
					echo "<script>
					alert('employee register success');
					window.location='register';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			
			include_once('register.php');
			break;
			
			case '/add_client':
			if(isset($_REQUEST['submit']))
			{
              
                $User_name=$_REQUEST['User_name'];
				$Password=$_REQUEST['Password'];
			    $Email=$_REQUEST['Email'];
				$Mobile_no=$_REQUEST['Mobile_no'];
				$Adharcard_no=$_REQUEST['Adharcard_no'];
				$Liacence_no=$_REQUEST['Liacence_no'];
				$RC_no=$_REQUEST['RC_no'];
				$Car_no=$_REQUEST['Car_no'];
				
				
				date_default_timezone_set('asia/calcutta');
				$cur_date_time=date("Y-m-d H:i:s");
				
				$arr=array("User_name"=>$User_name,
				"Password"=>$Password,
				"Email"=>$Email,
				"Mobile_no"=>$Mobile_no,
				"Adharcard_no"=>$Adharcard_no,
				"Liacence_no"=>$Liacence_no,
				"RC_no"=>$RC_no,
				"Car_no"=>$Car_no,
                "created_dt"=>$cur_date_time,
				"updated_dt"=>$cur_date_time);
				
				$run=$this->insert('client',$arr);
				if($run)
				{
                     echo "<script>
					alert('client Add success');
					window.location='add_client';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
              
			
			include_once('add_client.php');
			break;
			
			case '/add_booking':
			if(isset($_REQUEST['submit']))
			{
              
                $Booking_id=$_REQUEST['Booking_id'];
			    $Title=$_REQUEST['Title'];
				$Price=$_REQUEST['Price'];
			    date_default_timezone_set('asia/calcutta');
				$cur_date_time=date("Y-m-d H:i:s");
				
				$arr=array("Booking_id"=>$Booking_id,
				"Title"=>$Title,
				"Price"=>$Price,
			    "created_dt"=>$cur_date_time,
				"updated_dt"=>$cur_date_time);
				
				$run=$this->insert('booking',$arr);
				if($run)
				{
                     echo "<script>
					alert('booking Add success');
					window.location='add_booking';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
              
			
			include_once('add_booking.php');
			break;
			
			
			case '/add_contact':
			if(isset($_REQUEST['submit']))
			{
              
                $Name=$_REQUEST['Name'];
			    $Email=$_REQUEST['Email'];
				$phone_no=$_REQUEST['phone_no'];
			    date_default_timezone_set('asia/calcutta');
				$cur_date_time=date("Y-m-d H:i:s");
				
				$arr=array("Name"=>$Name,
				"Email"=>$Email,
				"phone_no"=>$phone_no,
			    "created_dt"=>$cur_date_time,
				"updated_dt"=>$cur_date_time);
				
				$run=$this->insert('contact',$arr);
				if($run)
				{
                     echo "<script>
					alert('contact Add success');
					window.location='add_contact';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
              
			
			include_once('add_contact.php');
			break;
			
			
			case '/add_car_adv':
			if(isset($_REQUEST['submit']))
			{
				
				
				$Car=$_REQUEST['Car_no'];
				$RC=$_REQUEST['RC_no'];
				$title=$_REQUEST['Title'];
				$Price=$_REQUEST['price'];
				$status=$_REQUEST['Car_status'];
				
		
				$arr=array("Car_no"=>$Car,
				"RC_no"=>$RC,
				"Title"=>$title,
				"price"=>$Price,
                "Car_status"=>$status);
				
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

			

			
			
            case '/add_car_type':
			if(isset($_REQUEST['submit']))
			{

				
				$Title=$_REQUEST['Title'];
				date_default_timezone_set('asia/calcutta');
				$cur_date_time=date("Y-m-d H:i:s");
				
				$arr=array("Title"=>$Title,
                "created_dt"=>$cur_date_time,
				"updated_dt"=>$cur_date_time);
				
				$run=$this->insert('car_type',$arr);
				if($run)
				{
					
					echo "<script>
					
					alert('car_type Add success');
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
			
			

          
			
            case '/details':
			include_once('details.php');
			break;
			
			case '/footer':
			include_once('footer.php');
			break;
			
			case '/header':
			include_once('header.php');
			break;
			
			case '/service':
			include_once('service.php');
			break;
			
			
			default:
			echo "Page Not Found";
			break;
			
		}
	}
	
}
$obj=new control;
?>