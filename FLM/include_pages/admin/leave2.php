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
<?php 
$get_login_names="select * from login ";
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
                    <h1 class="page-header">Leave Reports</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
             <div class="row">
                <div class="col-lg-12">
				<div class="panel panel-info">
                        <div class="panel-heading">
                            Select Name
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                    
  <form class="form-horizontal" role="form" method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
	<div class="form-group">
      <label class="control-label col-sm-3" for="id">Choose Name:</label>
      <div class="col-sm-7">
			<select class="form-control" id="sel1" name="drop_leave_reports">
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
        <input type="submit" class="btn btn-success" value="Submit" name="submit_get_report">
		
      </div>
    </div>
	
	
  </form>
  

                          
       
    

  </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
					<?php
	if(isset($_POST['submit_get_report']))
{
$name22=$_POST['drop_leave_reports'];	
	
	$sql1="SELECT * FROM leave_report where name='$name22'";
	$result1=mysqli_query($connection,$sql1);
$sql2="SELECT * FROM demo_init where Name='$name22' ";
$result2=mysqli_query($connection,$sql2);
$row2=mysqli_fetch_array($result2);
$sql3="SELECT * FROM demo where name='$name22' ";
$result3=mysqli_query($connection,$sql3);
$row3=mysqli_fetch_array($result3);
echo '            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            '.$name22.'
                        </div>
						
                        <!-- /.panel-heading -->
                        <div class="panel-body"><div class="dataTable_wrapper">';
echo '<table class="table table-striped table-bordered table-hover" id="dataTables-example">';
echo '<thead>';
echo '<tr>';
	echo '<th>Name</th>';
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
	echo '<td>'.$row2['Name'].'</td>';
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
	echo '<td>'.$row1['name'].'</td>';
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
	echo '<td>'.$row3['Name'].'</td>';
	echo '<td></td>';
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
	echo '  </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->';
}
?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
               
                                
 </div>
        <!-- /#page-wrapper -->

    </div><!-- /#wrapper -->';
    <?php include('../../include/javascripts.php'); ?>
</body>

</html>
