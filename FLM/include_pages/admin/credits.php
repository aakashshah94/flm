<?php
	include('../../include/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include('../../include/header.php'); ?>
</head>

<body>

    <div id="wrapper">
		<?php include_once('../../include/functions.php'); ?>
        <?php include('../../include/admin-nav.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Credits</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Enter Credits
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <?php
	

	$arr=array();
$sql9="select * from leave_report where credits is NULL ";
$result9=mysqli_query($connection,$sql9);
if(!$result9)
{
	echo mysqli_error();
}
while($row9=mysqli_fetch_array($result9))
{
	array_push($arr,$row9['app_id']);
}
if(!empty($arr))
{
echo '<table class="table table-striped table-bordered table-hover" id="dataTables-example">';
echo '<thead>';
echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Name</th>';
   // echo '<th>Employee ID</th>';
    echo '<th>Leave Type</th>';
	 echo '<th>Start Date</th>';
	 echo '<th>End Date</th>';
	 echo '<th>Number Of Day(s)</th>';
	 echo '<th>Reason</th>';
	 //echo '<th>Contact Address</th>';
	// echo '<th>Contact Number</th>';
	//echo '<th> Remarks</th>';
	echo '<th> Credits</th>';
	echo '<th> Submit</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
foreach($arr as $value)
{
	$sql= "select * from application where id=$value";
$result=mysqli_query($connection,$sql);
if(!$result)
{
	echo mysqli_error($connection);
}
while( $row=mysqli_fetch_array($result) )
{
		echo "<tr>";
		echo '<td>'.$row['id'].'</td>';
        echo '<td>'.$row['name'].'</td>';
        //echo '<td>'.$row['emp_id'].'</td>';
        echo '<td>'.$row['type_leave'].'</td>';
		echo '<td>'.$row['start_date'].'</td>';
		echo '<td>'.$row['end_date'].'</td>';
		echo '<td>'.$row['num_days'].'</td>';
		echo '<td>'.$row['reason'].'</td>';
		//echo '<td>'.$row['caddress'].'</td>';
		//echo '<td>'.$row['cnumber'].'</td>';
		echo '<td>'.'<form method="post" action="" >
					
					<input type="hidden" name="submit1" value="'. $row['id'].'" >
		<input type="text" name="credits" placeholder="" id="'. $row['id'].'" value="'.$credits.'"></td><td>
					<input type="submit" class="btn btn-primary" name="submit_credits" onclick="myFunction();" id="'. $row['id'].'" value="Submit Credits">
					</form>'.'</td>';
					echo '</tr>';
}

}
echo '</tbody>';
echo '</table>';
}
else
{
	echo "Every Approved Application is given credits !";
}
	
 ?>
 <?php
 if( isset( $_POST['submit_credits'] ) )
{
	$App_id=$_POST['submit1'];
	echo $App_id;
	$credits=$_POST['credits'];
	$sql9="UPDATE leave_report SET credits=$credits  WHERE app_id=$App_id";
	
	if( mysqli_query( $connection,$sql9 ) )
	{
		echo "Permission Granted Application no:".$App_id;
	}
	else
	{
		echo mysqli_error($connection);
	}
	$credit_name="select * from leave_report where app_id=$App_id";
	$res1=mysqli_query($connection,$credit_name);
	$row1=mysqli_fetch_array($res1);
	$lr_name=$row1['name'];
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
	//header("location:add-credits1.php");
}
?>
                            </div>
                            <!-- /.table-responsive -->
                            
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
