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
        <?php include('../../include/faculty-nav.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dispproved Applications</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <?php echo $login_session; ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <?php
	

	$sql="SELECT * FROM application where permission=-1 AND name='$login_session'";
	$result=mysqli_query($connection,$sql);

echo '<table class="table table-striped table-bordered table-hover" id="dataTables-example">';
echo '<thead>';
echo '<tr>';
    echo '<th>ID</th>';
    
    //echo '<th>Employee ID</th>';
    echo '<th>Leave Type</th>';
	 echo '<th>Start Date</th>';
	 echo '<th>End Date</th>';
	 echo '<th>Number Of Day(s)</th>';
	 echo '<th>Reason</th>';
	 echo '<th>Contact Address</th>';
	 echo '<th>Contact Number</th>';
	 echo '<th>Remarks</th>';
	
	echo '</tr><tbody>';
while( $row=mysqli_fetch_array($result) )
{
		echo '<tr class="gradeX">';
		echo '<td>'.$row['id'].'</td>';
       // echo '<td>'.$row['emp_id'].'</td>';
        echo '<td>'.$row['type_leave'].'</td>';
		echo '<td>'.$row['start_date'].'</td>';
		echo '<td>'.$row['end_date'].'</td>';
		echo '<td>'.$row['num_days'].'</td>';
		echo '<td>'.$row['reason'].'</td>';
		echo '<td>'.$row['caddress'].'</td>';
		echo '<td>'.$row['cnumber'].'</td>';
		echo '<td>'.$row['remarks'].'</td>';
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
