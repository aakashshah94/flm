<?php
	include('../../include/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include('../../include/header.php'); ?>
</head>

<body>
<?php
// define variables and set to empty values
$nameErr_new = $emp_idErr_new=$password_new=  "";
$name_new = $emp_id_new =$passwordErr_new="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["emp_id_new"])) 
   {
     $emp_idErr_new = "Employee ID is required";
   } else 
   {
     $emp_id_new = ($_POST["emp_id_new"]);
     // check if name only contains letters and whitespace
     //if (!preg_match("/^[a-zA-Z ]*$/",$emp_id_new)) {
      // $emp_idErr_new = "Only letters and white space allowed"; 
     
   }
   if (empty($_POST["password_new"])) 
   {
     $passwordErr_new = "Password is required";
   } else 
   {
     $password_new = ($_POST["password_new"]);
     // check if name only contains letters and whitespace
     //if (!preg_match("/^[a-zA-Z ]*$/",$emp_id_new)) {
      // $emp_idErr_new = "Only letters and white space allowed"; 
     
   }
   if (empty($_POST["name_new"])) 
   {
     $nameErr_new = "Name is required";
   } else 
   {
     $name_new = test_input($_POST["name_new"]);
     // check if name only contains letters and whitespace
     //if (!preg_match("/^[a-zA-Z ]*$/",$name_new)) {
       //$nameErr_new = "Only letters and white space allowed"; 
     
   }
   
 }  
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
    <div id="wrapper">
        <?php include('../../include/admin-nav.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Delete Faculty</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
				
				<div class="panel panel-primary">
                        <div class="panel-heading">
                            Delete Faculty Form
                        </div>
						<div class="panel-body">
                   <p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   <div class="form-group">
      <label class="control-label col-lg-2" for="name">Username</label>
      <div class="col-lg-10">
	  <!--<p class="form-control-static"></p>-->
        <input type="text" class="form-control" id="name" placeholder="username" name="name_new" value="<?php echo $name_new;?>">
		
		 <span class="error">*<?php echo $nameErr_new;?></span>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-lg-2" for="name">Employee ID</label>
      <div class="col-lg-10">
	  <!--<p class="form-control-static"></p>-->
        <input type="text" class="form-control"  placeholder="Employee ID" name="emp_id_new" value="<?php echo $emp_id_new;?>">
		
		 <span class="error">*<?php echo $emp_idErr_new;?></span>
      </div>
    </div>
	
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success" value="Submit" name="submit_new">
		
      </div>
    </div>
    
</form>
<?php
if( isset($_POST['submit_new']) )
{
	$num="";
	if( empty($nameErr_new) &&  empty($emp_idErr_new) &&  !empty($name_new) &&   !empty($emp_id_new) ) 
	{
		$l=$_POST['emp_id_new'];
		//echo $name_new;
		$run="select * from login where emp_id='$l' ";
		$res_run=mysqli_query($connection,$run);
		$num=mysqli_affected_rows($connection);
		$run2="select * from login where username='$name_new' ";
		$res_run2=mysqli_query($connection,$run2);
		$num2=mysqli_affected_rows($connection);
		//echo $num;
		if($num!='0' && $num2!='0')
		{
			$sqladd="delete  from login where emp_id='$l'";
			$res_sqladd=mysqli_query($connection,$sqladd);
			$sqladd2="delete  from demo_init where Emp_id='$l'";
			$res_sqladd2=mysqli_query($connection,$sqladd2);
			$sqladd3="delete from demo where emp_id='$l'";
			$res_sqladd3=mysqli_query($connection,$sqladd3);
			if($res_sqladd2 && $res_sqladd && $res_sqladd3)
			{
				echo "User Deleted";
			}
			else
			{
				echo "Something Went Wrong";
			}
		}
		else
		{
			echo "User Doesn't exists!!";
		}
	}
	else
	{
		echo "Check for inputs!";
	}

	//header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
</div></div>

               <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</div>
    <?php include('../../include/javascripts.php'); ?>
</body>

</html>
