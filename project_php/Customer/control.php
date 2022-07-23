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
				$User_name=$_REQUEST['User_name'];
				$Password=$_REQUEST['Password'];
				//$enc_Pass=md5($Password); 
				
				$where=array("User_name"=>$User_name,"Password"=>$Password);
					
				$res=$this->select_where('customer',$where);
				
			    $chk=$res->num_rows; // check cond by row and give ans in true or false
				if($chk==1)  // 1 means true
				{
                    $fetch=$res->fetch_object();
					$_SESSION['Cust_id']=$fetch->Cust_id;
					$_SESSION['User_name']=$fetch->User_name;			

				    echo "<script>
					
					alert('Login sucess');
					window.location='dashboard';
					</script>";

				}
				else
				{
                    echo "<script>
					
					alert('Login failed');
					window.location='dashboard';
					</script>";
					
				}

			}
			include_once('index.php');
			break;
			
		    case '/dashboard':
		    include_once('dashboard.php');
		    break;
			
			
		    case '/customer_logout':
			
			unset($_SESSION['Cust_id']);
			unset($_SESSION['User_name']);
			echo "<script>
			alert('Logout success');
			window.location='index';
			</script>";
			break;
			
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
			
              
			case '/manage_car_type':
			$car_type_arr=$this->select('car_type');
			include_once('manage_car_type.php');
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

            case '/manage_contact':
			$contact_arr=$this->select('contact');
			include_once('manage_contact.php');
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
			
			
			case '/register':
			if(isset($_REQUEST['submit']))
			{
				$Cust_id=$_REQUEST['Cust_id'];
				$Password=$_REQUEST['Password'];
				$Name=$_REQUEST['Name'];
				$User_name=$_REQUEST['User_name'];
				$Email=$_REQUEST['Email'];
				$Mobile_no=$_REQUEST['Mobile_no'];
				date_default_timezone_set('asia/calcutta');
				$cur_date_time=date("Y-m-d H:i:s");
				
				$arr=array("Cust_id"=>$Cust_id,
				"Password"=>$Password,
				"Name"=>$Name,
				"User_name"=>$User_name,
				"Email"=>$Email,
				"Mobile_no"=>$Mobile_no,
			    "created_dt"=>$cur_date_time,
				"updated_dt"=>$cur_date_time);
				
				$run=$this->insert('customer',$arr);
				if($run)
				{
					echo "<script>
					alert('customer register success');
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
			
         
          
			
			
			
			
            case '/signup':
			include_once('signup.php');
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