<?php
if( isset($_POST['submit_new']) )
{
	if( empty($nameErr_new) && empty($passwordErr_new) && empty($emp_idErr_new) &&  !empty($name_new) &&  !empty($password_new) && !empty($emp_id_new) ) 
	{
		
		echo $name_new;
		$run="select * from login where emp_id='$emp_id_new' ";
		$res_run=mysqli_query($connection,$run);
		$num=$mysqli_affected_rows($connection);
		if($num!=0)
		{
			$sqladd="INSERT INTO login (emp_id,username,password) VALUES ('$_POST[emp_id_new]','$_POST[name_new]','$_POST[password_new]')";
			$res_aqladd=mysqli_query($connection,$sqladd);
			if($res_aqladd)
			{
				echo "Done";
			}
			else
			{
				$e="USER EXITS!!";
			}
		}
		else
		{
			echo "user already exists!!";
		}
	}
	else
	{
		echo "Check for the inputs in the given fields !";
	}

	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>