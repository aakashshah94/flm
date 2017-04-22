<?php

	$Harsh="Harsh";
	$Utsavi="Utsavi";
	$Aakash="Aakash";
	$Miti="Miti";
	$CL="CL";
	$ExL="ExL";
	$half="half";
	$full="full";
	$type_leave="";
	$c1="";
	$c2="";
	$s1="";
	$s2="";
	$s3="";
	$s4="";
	$s5="";
	$s6="";
	$s7="";
	$remarks="";
	
?>
<?php
// define variables and set to empty values
$nameErr =$emp_idErr= $dayErr = $dropErr = $start_dateErr = $end_dateErr = $reasonErr = "";
 $day = $drop= $start_date = $end_date = $reason =$dropErr1= $credits="";
$name="$login_session";
$emp_id ="$login_session_emp_id";
$name1=$emp_id1=$CL1=$ExL1="";
$emp_idErr1=$ExLErr1=$CLErr1="";
$nameErr_new=$passwordErr_new=$emp_idErr_new=$e="";
$name_new=$password_new=$emp_id_new="";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
if(isset ($_POST['submit_form']) )
{
   if (empty($_POST["name"]))
   {
     $nameErr = "Name is required";
   } 
   else 
   {
     $name = test_input($_POST["name"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["emp_id"]))
   {
     $emp_idErr = "Employee ID is required";
   } 
   else 
   {
     $emp_id = test_input($_POST["emp_id"]);
     // check if name only contains letters and whitespace
     /*if (!preg_match("/^[a-zA-Z ]*$/",$emp_id)) {
       $emp_idErr = "Only letters and white space allowed"; */
     }
   }
   
   if (empty($_POST["day"]))
   {
     $dayErr = "day is required";
   } 
   else
   {
     $day = test_input($_POST["day"]);
   }
   
   if (empty ($_POST["drop"]) )
   {
	$dropErr="Leave Type is required";
   }
   else
   {
	$drop= test_input($_POST["day"]);
   }
   
   if (empty($_POST["start_date"]))
   {
     $start_dateErr = "Start Date is required";
   } 
   else
   {
     $start_date = test_input($_POST["start_date"]);
   }
   
   if (empty($_POST["end_date"]))
   {
     $end_dateErr = "End Date is required";
   } 
   else
   {
     $end_date = test_input($_POST["end_date"]);
   }
	
   if (empty($_POST["reason"]))
   {
     $reasonErr = "Reason is required";
   } 
   else 
   {
     $reason = test_input($_POST["reason"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$reason)) {
       $reasonErr = "Only letters and white space allowed"; 
     }
   }
   


if(isset ($_POST['submit3']) )
{
   if (empty($_POST["name"]))
   {
     $nameErr = "NAME is required";
   } 
   else 
   {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["emp_id"]))
   {
     $emp_idErr = "Employee ID is required";
   } 
   else 
   {
     $emp_id = test_input($_POST["emp_id"]);
     
     }
   
   
   if (empty($_POST["day"]))
   {
     $dayErr = "day is required";
   } 
   else
   {
     $day = test_input($_POST["day"]);
   }
   if($day==0.5)
   {
		$c1="checked";
   }
	if ($day==1)
	{
		$c2="checked";
	}
   
	if (empty ($_POST["drop"]) )
   {
		$dropErr="Leave Type is required";
   }
   else
   {
		$drop= test_input($_POST["drop"]);
   }
   
   if( $drop=="CL")
   {
		$s1="selected";
	}
	if( $drop=="ExL")
	{
		$s2="selected";
	}
	if( $drop=="EL")
   {
		$s3="selected";
	}
	if( $drop=="SL")
	{
		$s4="selected";
	}
	if( $drop=="RH")
   {
		$s5="selected";
	}
	if( $drop=="DL")
	{
		$s6="selected";
	}
	if( $drop=="LWP")
	{
		$s7="selected";
	}
	
	if (empty($_POST["start_date"]))
   {
     $start_dateErr = "Start Date is required";
   } 
   else
   {
     $start_date = test_input($_POST["start_date"]);
   }
   
   if (empty($_POST["end_date"]))
   {
     $end_dateErr = "End Date is required";
   } 
   else
   {
     $end_date = test_input($_POST["end_date"]);
   }
   if (empty($_POST["end_date"]))
   {
     $end_dateErr = "End Date is required";
   } 
   else
   {
     $end_date = test_input($_POST["end_date"]);
   }
	


if( isset($_POST['submit7']) )
{
	if(empty($_POST["credits"] ) )
	{
		$credits="";
	}
	else
	{
		$credits=test_input($_POST["credits"]);
	}
}

}
if(isset ($_POST['submit_add_data']) )
{
   if (empty($_POST["name1"]))
   {
     $nameErr1 = "Name is required";
   } 
   else 
   {
     $name1 = test_input($_POST["name1"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$name1)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["emp_id1"]))
   {
     $emp_idErr1 = "Employee ID is required";
   } 
   else 
   {
     $emp_id1 = test_input($_POST["emp_id1"]);
     // check if name only contains letters and whitespace
     /*if (!preg_match("/^[a-zA-Z ]*$/",$emp_id)) {
       $emp_idErr = "Only letters and white space allowed"; */
     }
	 
	if (empty($_POST["CL1"]))
   {
     $CLErr1 = "Number of CL is required";
   } 
   else 
   {
     $CL1 = test_input($_POST["CL1"]);
     // check if name only contains letters and whitespace
     /*if (!preg_match("/^[a-zA-Z ]*$/",$emp_id)) {
       $emp_idErr = "Only letters and white space allowed"; */
     }
	 
	 if (empty($_POST["ExL1"]))
   {
     $ExLErr1 = "Number of CL is required";
   } 
   else 
   {
     $ExL1 = test_input($_POST["ExL1"]);
     // check if name only contains letters and whitespace
     /*if (!preg_match("/^[a-zA-Z ]*$/",$emp_id)) {
       $emp_idErr = "Only letters and white space allowed"; */
     }
   }
	
	if( isset($_POST['submit_admin_settings_delete']) )
	{
		if (empty($_POST["drop_admin_settings"]) )
		{
			$dropErr1="Leave Type is required";
		}
		else
		{
			
			$drop_admin_settings=$_POST['drop_admin_settings'];
			$add_admin="UPDATE login set admin=0 where username='$drop_admin_settings'";
			$res=mysqli_query($connection,$add_admin);
			$dropErr1="Admin Deleted!";
		}
		
	}
	if( isset($_POST['submit_new']) )
	{
		
			if (empty($_POST["name_new"]))
			{
				$nameErr_new = "Name is required";
			} 
			else 
			{
			$name_new = test_input($_POST["name_new"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$nameErr_new = "Only letters and white space allowed"; 
			}
			}
   
			if (empty($_POST["emp_id_new"]))
			{
				$emp_idErr_new = "Employee ID is required";
			} 
		else 
		{
			$emp_id_new = test_input($_POST["emp_id_new"]);
     // check if name only contains letters and whitespace
     /*if (!preg_match("/^[a-zA-Z ]*$/",$emp_id)) {
       $emp_idErr = "Only letters and white space allowed"; */
		}
		if (empty($_POST["password_new"]))
			{
				$passwordErr_new = "Password is required";
			} 
		else 
		{
			$password_new = test_input($_POST["password_new"]);
     // check if name only contains letters and whitespace
     /*if (!preg_match("/^[a-zA-Z ]*$/",$emp_id)) {
       $emp_idErr = "Only letters and white space allowed"; */
		}
	}
}//MAIN IF

function test_input($data) 
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function get_days($s1,$s2)
{
	$date1=date_create($s1);
	$date2=date_create($s2);
	$diff=date_diff($date1,$date2);
	return $diff;
}
function get_days_corrected($s1,$s2)
{
	$lol=get_days($s1,$s2);
	$num_day= $lol->format("%a"+'1');
	echo $num_day;
}
function get_date_range ( $s1,$s2 )
{
	
	$begin = new DateTime($s1);
	$end = new DateTime($s2);
	$daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);
	/*foreach($daterange as $date)
	{
    echo $date->format("Y-m-d") . "<br>";
	}*/
	return $datarange;
}
function get_days_latest($s1,$s2)
{
	$date1 = new DateTime($s1);
	$date2 = new DateTime($s2);
	$interval = $date1->diff($date2);
	$num_days= $interval->days ;
	return $num_days;
}
function generate_leave_report($s1,$s2,$day,$type_leave)
{
	$num_days=get_days_corrected($s1,$s2);
	if($type_leave=="CL")
	{
		$num_CL=$num_days;
		$num_ExL=0;
	}
	elseif($type_leave=="ExL")
	{
		$num_ExL=$num_days;
		$num_ExL=0;
	}
	$lr = array($s1,$num_CL,$num_ExL);
	$ser_lr=serialize($lr);
	return $ser_lr;
}
?>