<?php
	include('../include/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include('../include/header.php'); ?>
</head>

<body>

    <div id="wrapper">
		<?php include_once('../include/functions.php'); ?>
        <?php include('../include/faculty-nav.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                               <?php
$arr1=array();
$sql1= "select * from leave_report where credits is NOT NULL";
$result1=mysqli_query($connection,$sql1);
if(!$result1)
{
	echo mysqli_error();
}
while($row1=mysqli_fetch_array($result1))
{
	array_push($arr1,$row1['app_id']);
}
if(!empty($arr1) )
{
echo '<table class="table table-striped table-bordered table-hover" id="dataTables-example">';
echo '<thead>';
echo '<tr>';
	echo '<th>ID</th>';
    echo '<th>Name</th>';
    echo '<th>Employee ID</th>';
    echo '<th>Leave Type</th>';
	 echo '<th>Start Date</th>';
	 echo '<th>End Date</th>';
	 echo '<th>Number Of Day(s)</th>';
	 echo '<th>Reason</th>';
	 echo '<th>Contact Address</th>';
	 echo '<th>Contact Number</th>';
	 echo '<th> Prevoious Credits</th>';
	echo '<th colspan=2> Remarks/ Credits</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
//print_r($arr1);
foreach($arr1 as $value)
{
	$sql= "select * from application where id=$value";
	$result=mysqli_query($connection,$sql);
	if(!$result)
	{
		echo mysqli_error($connection);
	}

while( $row=mysqli_fetch_array($result) )
{
		
		echo '<tr class="gradeX">';
		echo '<td>'.$row['id'].'</td>';
        echo '<td>'.$row['name'].'</td>';
        echo '<td>'.$row['emp_id'].'</td>';
        echo '<td>'.$row['type_leave'].'</td>';
		echo '<td>'.$row['start_date'].'</td>';
		echo '<td>'.$row['end_date'].'</td>';
		echo '<td>'.$row['num_days'].'</td>';
		echo '<td>'.$row['reason'].'</td>';
		echo '<td>'.$row['caddress'].'</td>';
		echo '<td>'.$row['cnumber'].'</td>';
		
		echo '<td>hahah</td>';
		echo '<td>'.'<form method="post" action="" >
					<input type="text" name="remarks" placeholder="'.$row['remarks'].'" value="'.$row['remarks'].'" >
					<input type="hidden" name="submit1" value="'. $row['id'].'" >
		<input type="text" name="credits" placeholder="" id="'. $row['id'].'" value="'.$credits.'">
					<input type="submit" name="submit_credits" onclick="myFunction();" id="'. $row['id'].'" value="Submit Credits">
					</form>'.'</td>';
		
    echo '</tr>';
}
}
echo '</tbody>';
echo '</table>';
}
else
{
	echo "Nothing to show !";
}
echo '<h2>Add Credit</h2>';
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

//print_r($arr);
if(!empty($arr))
{
echo '<table class="table table-striped table-bordered table-hover" id="dataTables-example">';
echo '<thead>';
echo '<tr>';
	echo '<th>ID</th>';
    echo '<th>Name</th>';
    echo '<th>Employee ID</th>';
    echo '<th>Leave Type</th>';
	 echo '<th>Start Date</th>';
	 echo '<th>End Date</th>';
	 echo '<th>Number Of Day(s)</th>';
	 echo '<th>Reason</th>';
	 echo '<th>Contact Address</th>';
	 echo '<th>Contact Number</th>';
	echo '<th colspan=2> Remarks/ Credits</th>';
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
$old_id=0;

while( $row=mysqli_fetch_array($result) )
{
		echo "<tr>";
		echo '<td>'.$row['id'].'</td>';
        echo '<td>'.$row['name'].'</td>';
        echo '<td>'.$row['emp_id'].'</td>';
        echo '<td>'.$row['type_leave'].'</td>';
		echo '<td>'.$row['start_date'].'</td>';
		echo '<td>'.$row['end_date'].'</td>';
		echo '<td>'.$row['num_days'].'</td>';
		echo '<td>'.$row['reason'].'</td>';
		echo '<td>'.$row['caddress'].'</td>';
		echo '<td>'.$row['cnumber'].'</td>';
		echo '<td>'.'<form method="post" action="" >
					<input type="text" name="remarks" placeholder="'.$row['remarks'].'" value="'.$row['remarks'].'" >
					<input type="hidden" name="submit1" value="'. $row['id'].'" >
		<input type="text" name="credits" placeholder="" id="'. $row['id'].'" value="'.$credits.'">
					<input type="submit" name="submit_credits" onclick="myFunction();" id="'. $row['id'].'" value="Submit Credits">
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
if( isset( $_POST['submit_credits'] ) )
{
	$App_id=$_POST['submit1'];
	echo $App_id;
	$credits=$_POST['credits'];
	$sql9="UPDATE leave_report SET credits=$credits  WHERE app_id=$App_id";
	//$sql10="update leave_report set credits=$credits where id=$App_id";
	//if( mysqli_query( $connection,$sql10 ) )
	//{
		//echo "Permission Granted Application no:".$App_id;
	//}
	/*else
	{
		echo "Error in updating try again later... !";
	}*/
	if( mysqli_query( $connection,$sql9 ) )
	{
		echo "Permission Granted Application no:".$App_id;
	}
	else
	{
		echo mysqli_error($connection);
	}
	
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

    <?php include('../include/javascripts.php'); ?>
</body>

</html>
