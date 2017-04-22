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
		
        <?php include('../include/faculty-nav.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Admin Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            New Leave Applications
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
<?php
	
$sql= "select * from application where permission=0";

$result=mysqli_query($connection,$sql);
if(mysqli_affected_rows($connection)!=0)
{
$old_id=0;
echo '<table class="table table-striped table-bordered table-hover" id="dataTables-example">';
echo '<thead>';
echo '<tr class="gradeX">';
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
	 echo '<th>Remarks/th>';
	echo '<th colspan=2>Permission</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
while( $row=mysqli_fetch_array($result) )
{

	$remarks="";
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
		echo '<td>'.'<form method="post" action="update.php" >
					<input type="text" name="remarks" placeholder="'.$row['remarks'].'" value="'.$row['remarks'].'" ></td><td>
					<input type="hidden" name="submit1" value="'. $row['id'].'" >
					<input type="hidden" name="submit5" value="'. $row['name'].'" >
					<input type="hidden" name="submit3" value="'. $row['type_leave'].'" >
					<input type="hidden" name="submit4" value="'. $row['num_days'].'" >
					<input type="submit" name="submit_approve" onclick="myFunction()" id="'. $row['id'].'" value="Approve">
					</td><td>
					<input type="submit" name="submit_disapprove" onclick="myFunction()" id="'. $row['id'].'" value="DIsapprove">
					
					</form>'.'</td>';
		//echo '<td>'.'<input type="button" name="'. $row['id'].'" value="Disapprove" >'.'</button>'.'</td>';
    
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
}
else
{
	echo "No new application";
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
