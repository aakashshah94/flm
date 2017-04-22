<?php
include('session.php');
?>
<?php

/*$sql="SELECT id FROM application ORDER BY id DESC LIMIT 1;";
$result1=mysqli_query($con,$sql);
$lol=mysqli_fetch_array($result1);
echo $lol['id'];*/

if( isset( $_POST['submit_approve'] ) )
{
	
	$remarks=$_POST['remarks'];
	//echo $remarks;
	//echo $_POST['remarks'];
	//echo $_POST['submit'];
	$demo_name=$_POST['submit5'];
	$demo_type_leave= $_POST['submit3'];
	$demo_num_days=$_POST['submit4'];
	$leave_report_emp_id=$_POST['submit6'];
	echo 'DAYS:'.$demo_num_days;
	$App_id=$_POST['submit1'];
	$sql1="UPDATE application SET remarks='$remarks'  WHERE id=$App_id  ";
	$sql="UPDATE application SET permission=1  WHERE id=$App_id  ";
	if( mysqli_query( $connection,$sql ) && mysqli_query($connection,$sql1) )
	{
		echo "Permission Granted Application no:".$App_id;
	}
	else
	{
		echo "Error in updating try again later... !";
	}
	$sql3="select * from demo where Name='$demo_name'";
	$result3=mysqli_query($connection,$sql3);
	if( $result3=mysqli_query($connection,$sql3)  )
	{
		echo "RUNNNN";
	}
	$row3=mysqli_fetch_array($result3);
	echo 'SEEEEEEEEEEEEEEEEEE:'.$row3['Name'];
	$sql5="select * from application where id=$App_id ";
	if( $result5=mysqli_query($connection,$sql5)  )
	{
		echo "RUNNNN";
	}
	else
	{
		echo "Somthing went wrong!";
	}
	$row5=mysqli_fetch_array($result5);
	$s1=$row5['start_date'];
	$s2=$row5['end_date'];
	//$leave=$_POST['drop'];
		//echo "LT:".$leave;
	$row3[$demo_type_leave]=$row3[$demo_type_leave]-$demo_num_days;
	echo $row[$demo_type_leave];
	$sql4="UPDATE demo SET $demo_type_leave=$row3[$demo_type_leave] where Name='$demo_name'";
	if( $result4=mysqli_query($connection,$sql4)  )
	{
		echo "Succesfullty Granted!CLCLCLCLCLLC!";
		//header("location: admin2.php");
	}
	else
	{
		echo "ERRORRRORO";
	}
	if( $demo_type_leave==="CL")
	{
		$sql6 = "INSERT INTO leave_report 
			(app_id,name,lr_sdate,lr_edate,CL,ExL,EL,SL,RH,DL,LWP) 
			VALUES ( '$App_id','$demo_name','$s1','$s2','$demo_num_days','0','0','0','0','0','0')" ;
			
		if( $result6=mysqli_query($connection,$sql6)  )
		{
			echo "RUNNNN-6";
		}
	}
	elseif ( $demo_type_leave==="ExL")
	{
		$sql6 = "INSERT INTO leave_report 
			(app_id,name,lr_sdate,lr_edate,CL,ExL,EL,SL,RH,DL,LWP) 
			VALUES ( '$App_id','$demo_name','$s1','$s2','0','$demo_num_days','0','0','0','0','0')" ;
			
		if( $result6=mysqli_query($connection,$sql6)  )
		{
			echo "RUNNNN-6";
		}
	}
	elseif ( $demo_type_leave==="EL")
	{
		$sql6 = "INSERT INTO leave_report 
			(app_id,name,lr_sdate,lr_edate,CL,ExL,EL,SL,RH,DL,LWP) 
			VALUES ( '$App_id','$demo_name','$s1','$s2','0','0','$demo_num_days','0','0','0','0')" ;
			
		if( $result6=mysqli_query($connection,$sql6)  )
		{
			echo "RUNNNN-6";
		}
	}
	elseif ( $demo_type_leave==="SL")
	{
		$sql6 = "INSERT INTO leave_report 
			(app_id,name,lr_sdate,lr_edate,CL,ExL,EL,SL,RH,DL,LWP) 
			VALUES ( '$App_id','$demo_name','$s1','$s2','0','0','0','$demo_num_days','0','0','0')" ;
			
		if( $result6=mysqli_query($connection,$sql6)  )
		{
			echo "RUNNNN-6";
		}
	}
	elseif ( $demo_type_leave==="RH")
	{
		$sql6 = "INSERT INTO leave_report 
			(app_id,name,lr_sdate,lr_edate,CL,ExL,EL,SL,RH,DL,LWP) 
			VALUES ( '$App_id','$demo_name','$s1','$s2','0','0','0','0','$demo_num_days','0','0')" ;
			
		if( $result6=mysqli_query($connection,$sql6)  )
		{
			echo "RUNNNN-6";
		}
	}
	elseif ( $demo_type_leave==="DL")
	{
		$sql6 = "INSERT INTO leave_report 
			(app_id,name,lr_sdate,lr_edate,CL,ExL,EL,SL,RH,DL,LWP) 
			VALUES ( '$App_id','$demo_name','$s1','$s2','0','0','0','0','0','$demo_num_days','0')" ;
			
		if( $result6=mysqli_query($connection,$sql6)  )
		{
			echo "RUNNNN-6";
		}
	}
	elseif ( $demo_type_leave==="LWP")
	{
		$sql6 = "INSERT INTO leave_report 
			(app_id,name,emp_id,lr_sdate,lr_edate,CL,ExL,EL,SL,RH,DL,LWP) 
			VALUES ( '$App_id','$demo_name','$s1','$s2','0','0','0','0','0','0','$demo_num_days')" ;
			
		if( $result6=mysqli_query($connection,$sql6)  )
		{
			echo "RUNNNN-6";
		}
	}
	else
	{
		echo "Somthing went wrong!!";
	}
	$_POST['submit']="";
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
if( isset( $_POST['submit_disapprove'] ) )
{
	$remarks=$_POST['remarks'];
	echo $_POST['submit2'];
	echo $_POST['submit1'];
	$App_id=$_POST['submit1'];
	$sql="UPDATE application SET permission=-1 WHERE id=$App_id  ";
	$sql1="UPDATE application SET remarks='$remarks'  WHERE id=$App_id  ";
	if( mysqli_query( $connection,$sql ) && mysqli_query($connection,$sql1) )
	{
		echo "Permission Granted Application no:".$App_id;
	}
	else
	{
		echo "Error in updating try again later... !";
	}
	$print="hm";
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
if( isset( $_POST['submit_disapprove_from_approve'] ) )
{
	
	$remarks=$_POST['remarks'];
	//echo $remarks;
	//echo $_POST['remarks'];
	//echo $_POST['submit'];
	$demo_name=$_POST['submit5'];
	$demo_type_leave= $_POST['submit3'];
	$demo_num_days=$_POST['submit4'];
	echo 'DAYS:'.$demo_num_days;
	$App_id=$_POST['submit1'];
	$sql1="UPDATE application SET remarks='$remarks'  WHERE id=$App_id  ";
	$sql="UPDATE application SET permission=-1  WHERE id=$App_id  ";
	if( mysqli_query( $connection,$sql ) && mysqli_query($connection,$sql1) )
	{
		echo "Permission Granted Application no:".$App_id;
	}
	else
	{
		echo "Error in updating try again later... !";
	}
	$sql3="select * from demo where Name='$demo_name'";
	$result3=mysqli_query($connection,$sql3);
	if( $result3=mysqli_query($connection,$sql3)  )
	{
		echo "RUNNNN";
	}
	$row3=mysqli_fetch_array($result3);
	echo 'SEEEEEEEEEEEEEEEEEE:'.$row3['Name'];
	$row3[$demo_type_leave]=$row3[$demo_type_leave]+$demo_num_days;
	$a= $row3[$demo_type_leave];
	
	if( $demo_type_leave==="CL")
	{
		$sql4="UPDATE demo SET CL=$a where Name='$demo_name'";
		if( $result4=mysqli_query($connection,$sql4)  )
		{
			echo "Succesfullty Granted!CLCLCLCLCLLC!";
		}
		
	}
	elseif ( $demo_type_leave==="ExL")
	{
		$sql4="UPDATE demo SET ExL=$a where Name='$demo_name'";
		if( $result4=mysqli_query($connection,$sql4)  )
		{
			echo "Succesfullty Granted!CLCLCLCLCLLC!";
		}
	}
	elseif ( $demo_type_leave==="EL")
	{
		$sql4="UPDATE demo SET EL=$a where Name='$demo_name'";
		if( $result4=mysqli_query($connection,$sql4)  )
		{
			echo "Succesfullty Granted!CLCLCLCLCLLC!";
		}
	}
	elseif ( $demo_type_leave==="SL")
	{
		$sql4="UPDATE demo SET SL=$a where Name='$demo_name'";
		if( $result4=mysqli_query($connection,$sql4)  )
		{
			echo "Succesfullty Granted!CLCLCLCLCLLC!";
		}
	}
	elseif ( $demo_type_leave==="RH")
	{
		$sql4="UPDATE demo SET RH=$a where Name='$demo_name'";
		if( $result4=mysqli_query($connection,$sql4)  )
		{
			echo "Succesfullty Granted!CLCLCLCLCLLC!";
		}
	}
	elseif ( $demo_type_leave==="DL")
	{
		$sql4="UPDATE demo SET DL=$a where Name='$demo_name'";
		if( $result4=mysqli_query($connection,$sql4)  )
		{
			echo "Succesfullty Granted!CLCLCLCLCLLC!";
		}
	}
	elseif ( $demo_type_leave==="LWP")
	{
		$sql4="UPDATE demo SET LWP=$a where Name='$demo_name'";
		if( $result4=mysqli_query($connection,$sql4)  )
		{
			echo "Succesfullty Granted!CLCLCLCLCLLC!";
		}
	}
	$sql11="delete from leave_report where app_id=$App_id";
	$result11=mysqli_query($connection,$sql11);
	$lr_name=$demo_name;
	$total="SELECT * FROM leave_report where name='$lr_name' ";
	$res=mysqli_query($connection,$total);
	$c=0;
	while($row=mysqli_fetch_array($res) )
	{
		$c=$c+$row['credits'];
	}
	echo $c;
	$update="UPDATE demo set total_credits=$c where Name='$lr_name'";
	$q_update=mysqli_query($connection,$update);

	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
/*if( isset( $_POST['submit_credits'] ) )
{
	$App_id=$_POST['submit1'];
	$credits=$_POST['credits'];
	$sql9="UPDATE leave_report SET credits=$credits  WHERE id=$App_id";
	//$sql10="update leave_report set credits=$credits where id=$App_id";
	//if( mysqli_query( $connection,$sql10 ) )
	//{
		//echo "Permission Granted Application no:".$App_id;
	//}
	/*else
	{
		echo "Error in updating try again later... !";
	}*/
	/*if( mysqli_query( $connection,$sql9 ) )
	{
		echo "Permission Granted Application no:".$App_id;
	}
	else
	{
		echo "Error in updating try again later... !";
	}
	
	header("location:add-credits1.php");
}
//header("location:admin2.php");*/
?>