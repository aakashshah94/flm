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
	

	$sql="SELECT * FROM leave_reports ";
	$result=mysqli_query($connection,$sql);

echo '<table class="table table-striped table-bordered table-hover" id="dataTables-example">';
echo '<thead>';
echo '<tr>';
    echo '<th>Name</th>';
	echo '<th>CL</th>';
	echo '<th>ExL</th>';
	echo '<th>EL</th>';
	echo '<th>SL</th>';
	echo '<th>RH</th>';
	echo '<th>DL</th>';
	echo '<th>LWP</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
while( $row=mysqli_fetch_array($result) )
{
	$remarks="";
        echo '<tr class="gradeX">';
		
        echo '<td>'.$row['Name'].'</td>';
		echo '<td>'.$row['CL'].'</td>';
		echo '<td>'.$row['ExL'].'</td>';
		echo '<td>'.$row['EL'].'</td>';
		echo '<td>'.$row['SL'].'</td>';
		echo '<td>'.$row['RH'].'</td>';
		//echo '<td>'.$row['DL'].'</td>';
		echo '<td>'.$row['LWP'].'</td>';
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

    <?php include('../include/javascripts.php'); ?>
</body>

</html>
