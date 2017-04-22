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
                    <h1 class="page-header">Leave Report</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <?php echo "$login_session";?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <?php
$sql1="SELECT * FROM leave_report where Name='$login_session'";
	$result1=mysqli_query($connection,$sql1);
$sql2="SELECT * FROM demo_init where name='$login_session' ";
$result2=mysqli_query($connection,$sql2);
$row2=mysqli_fetch_array($result2);
$sql3="SELECT * FROM demo where name='$login_session' ";
$result3=mysqli_query($connection,$sql3);
$row3=mysqli_fetch_array($result3);
echo '<table class="table table-striped table-bordered table-hover" id="dataTables-example">';
echo '<thead>';
echo '<tr>';
	//echo '<th>Name</th>';
    echo '<th>Application ID</th>';
    echo '<th>Start Date</th>';
	echo '<th>End Date</th>';
	echo '<th>CL</th>';
	echo '<th>ExL</th>';
	echo '<th>EL</th>';
	echo '<th>SL</th>';
	echo '<th>RH</th>';
	echo '<th>DL</th>';
	echo '<th>LWP</th>';
	echo '<th>Credits</th>';
	echo '</tr></thead><tr>';
	//echo '<td>'.$row2['Name'].'</td>';
	echo '<td></td>';
	echo '<td>Balance</td>';
	echo '<td>Before</td>';
	echo '<td>'.$row2['CL'].'</td>';
	echo '<td>'.$row2['ExL'].'</td>';
	echo '<td>'.$row2['EL'].'</td>';
	echo '<td>'.$row2['SL'].'</td>';
	echo '<td>'.$row2['RH'].'</td>';
	echo '<td>'.$row2['DL'].'</td>';
	echo '<td>'.$row2['LWP'].'</td>';
	echo '<td>0</td></tr>';
while( $row1=mysqli_fetch_array($result1) )
{
	echo '<tr>';
	//echo '<td>'.$row1['name'].'</td>';
	echo '<td>'.$row1['app_id'].'</td>';
	echo '<td>'.$row1['lr_sdate'].'</td>';
	echo '<td>'.$row1['lr_edate'].'</td>';
	echo '<td>'.$row1['CL'].'</td>';
	echo '<td>'.$row1['ExL'].'</td>';
	echo '<td>'.$row1['EL'].'</td>';
	echo '<td>'.$row1['SL'].'</td>';
	echo '<td>'.$row1['RH'].'</td>';
	echo '<td>'.$row1['DL'].'</td>';
	echo '<td>'.$row1['LWP'].'</td>';
	echo '<td>'.$row1['credits'].'</td></tr>';		
}
echo '<tr>';
	//echo '<td>'.$row3['Name'].'</td>';
	echo '<td>z</td>';
	echo '<td>Balance</td>';
	echo '<td>Now</td>';
	echo '<td>'.$row3['CL'].'</td>';
	echo '<td>'.$row3['ExL'].'</td>';
	echo '<td>'.$row3['EL'].'</td>';
	echo '<td>'.$row3['SL'].'</td>';
	echo '<td>'.$row3['RH'].'</td>';
	echo '<td>'.$row3['DL'].'</td>';
	echo '<td>'.$row3['LWP'].'</td>';
	echo '<td>'.$row3['total_credits'].'</td></tr>';
	echo '</tbody></table>';


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
