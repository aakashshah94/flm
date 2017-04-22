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
                    <h1 class="page-header">Notifications </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Notifications 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
					<?php
	

	$sql="SELECT * FROM application where name='$login_session' ORDER BY id DESC LIMIT 1;";
	$result=mysqli_query($connection,$sql);
	$sql1="SELECT * FROM application where name='$login_session' ORDER BY id DESC LIMIT 1;";
	$result1=mysqli_query($connection,$sql1);
$old_id=0;
$r=mysqli_fetch_array($result1);
if( $r['permission']!=0 )
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
	 echo '<th>Reason</th>';
	 //echo '<th>Contact Address</th>';
	 echo '<th>Contact Number</th>';
	echo '<th colspan=1>Permission</th>';
	echo '<th colspan=1>Remarks</th>';
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
		echo '<td>'.$row['reason'].'</td>';
		//echo '<td>'.$row['caddress'].'</td>';
		echo '<td>'.$row['cnumber'].'</td>';
		if($row['permission']==-1)
		{
			echo '<td>Disapproved!</td>';
		}
		elseif ($row['permission']==1)
		{
			echo '<td>Approved!</td>';
		}
		echo '<td>'.$row['remarks'].'</td>';

    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
}
else
{
	echo "Your Last Leave Application is still on hold !!";
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
