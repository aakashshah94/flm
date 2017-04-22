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
                    <h1 class="page-header">Approved Applications</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Approved Leave Applications
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <?php
	

	$sql="SELECT * FROM application where permission=1 ";
	$result=mysqli_query($connection,$sql);

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
	 echo '<th>Contact Number</th>';
	 echo '<th>Remarks</th>';
	echo '<th>Permission</th>';
	echo '</tr><tbody>';
while( $row=mysqli_fetch_array($result) )
{
		echo '<tr class="gradeX">';
		echo '<td>'.$row['id'].'</td>';
        echo '<td>'.$row['name'].'</td>';
        //echo '<td>'.$row['emp_id'].'</td>';
        echo '<td>'.$row['type_leave'].'</td>';
		echo '<td>'.$row['start_date'].'</td>';
		echo '<td>'.$row['end_date'].'</td>';
		echo '<td>'.$row['num_days'].'</td>';
		echo '<td>'.$row['reason'].'</td>';
		//echo '<td>'.$row['caddress'].'</td>';
		echo '<td>'.$row['cnumber'].'</td>';
		echo '<td>'.'<form method="post" action="../../include/update.php" >
					<input type="text" name="remarks" placeholder="'.$row['remarks'].'" value="'.$row['remarks'].'" style="width:100px">
					</td><td><input type="hidden" name="submit1" value="'. $row['id'].'" >
					<input type="hidden" name="submit1" value="'. $row['id'].'" >
					<input type="hidden" name="submit5" value="'. $row['name'].'" >
					<input type="hidden" name="submit6" value="'. $row['emp_id'].'" >
					<input type="hidden" name="submit3" value="'. $row['type_leave'].'" >
					<input type="hidden" name="submit4" value="'. $row['num_days'].'" >
					<input type="submit" class="btn btn-danger" name="submit_disapprove_from_approve" onclick="myFunction();" id="'. $row['id'].'" value="DIsapprove">
					
					</form>'.'</td>';
		//echo '<td>'.'<input type="button" name="'. $row['id'].'" value="Disapprove" >'.'</button>'.'</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';


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
