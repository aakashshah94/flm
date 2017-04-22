<?php
	include('../../include/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include('../../include/header.php'); ?>
</head>

<body>
<?php include('../../include/functions.php');
$dropErr1=""; ?>
    <div id="wrapper">
        <?php include('../../include/admin-nav.php'); ?>
<?php 
$get_login_names="select * from login where admin=0";
if(!$result_get_login_names=mysqli_query($connection,$get_login_names))
{
	echo mysqli_error();
}
$arr=array();
while($row_get_login_names=mysqli_fetch_array($result_get_login_names))
{
	array_push($arr,$row_get_login_names['username']);
}
//print_r($arr);


 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Admin</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
				<div class="panel panel-primary">
                        <div class="panel-heading">
                            Add Admin 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                    
  <form class="form-horizontal" role="form" method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
	<div class="form-group">
      <label class="control-label col-sm-3" for="id">Choose Name:</label>
      <div class="col-sm-7">
			<select class="form-control" id="sel1" name="drop_admin_settings">
			<option value="0">--Select Leave--</option>
			<?php
			foreach($arr as $name)
			{
				echo '<option value="'.$name.'">'.$name.'</option>';
			}
			?>
			</select>
			<span class="error">* <?php echo $dropErr1;?></span>
		</div>
	</div>
	
	    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success" onclick="myFunction()" value="Submit" name="submit_admin_settings">
		
      </div>
    </div>
	
	
  </form>
  <?php
if( isset($_POST['submit_admin_settings']) )
	{
	if( !empty($_POST['drop_admin_settings'] )) 
	{
		$login_name=$_POST['drop_admin_settings'];
		$add_admin="UPDATE login set admin=1 where username='$login_name'";
		$res=mysqli_query($connection,$add_admin);
		echo '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                '.$login_name.' is added to admin panel.
                            </div>';
	}
	else
	{
		$dropErr1="please select a value";
	}
	}
?>
  </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include('../../include/javascripts.php'); ?>
</body>

</html>
