<?php
	include('../../include/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style>
.textbox
{
	width:50px;
}
</style>
<?php include('../../include/header.php'); ?>
</head>

<body>
<?php
// define variables and set to empty values
$CL=$ExL=$EL=$SL=$RH=$DL=$LWP="";
$adddata_error="";


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
if(isset($_POST["submit_adddata"]))
{
$CL=$_POST['CL'];
	 $ExL=$_POST['ExL'];
	 $EL=$_POST['EL'];
	 $SL=$_POST['SL'];
	 $RH=$_POST['RH'];
	 $DL=$_POST['DL'];
	 $LWP=$_POST['LWP'];
   if ( empty($_POST["CL"]) || empty($_POST["ExL"]) || empty($_POST["EL"]) || empty($_POST["SL"]) || empty($_POST["DL"])
		|| empty($_POST["LWP"]) || empty($_POST["RH"]) ) 
   {
     $adddata_error = '<div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Enter All the Fields.
                            </div>';
   } 
   else 
   {
	$name=$_POST['namee'];
     
	 
	 $add_data="Update  demo_init Set CL=$CL,EL=$EL,SL=$SL,DL=$DL,RH=$RH,LWP=$LWP,ExL=$ExL where Name='$name'";
	 $res_add_data=mysqli_query($connection,$add_data);
	 if($res_add_data)
	 {
		$adddata_error = '<div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Entered data Successfully!
                            </div>';
	 }
	 else
	 {
		$adddata_error = '<div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Something went wrong!
                            </div>';
	 }
	 
	 
   }
   
   
function test_input($data) 
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
}
}
?>
    <div id="wrapper">
		
        <?php include('../../include/admin-nav.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Faculty Data</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Add Faculty Data
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <?php
	

	$sql="SELECT * FROM demo_init where CL is NULL ";
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
	echo '<th>Save Data</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	
while( $row=mysqli_fetch_array($result) )
{
	
        echo '<tr class="gradeX">';
		 echo '<td>'.$row['Name'].'</td>';
		echo '<td><form method="post" action="" >
					<input type="text" name="CL" placeholder="CL" value="'.$CL.'" class="textbox" ></td><td>
					<input type="text" name="ExL" placeholder="ExL" value="'.$ExL.'"  class="textbox"></td><td>
					<input type="text" name="EL" placeholder="EL" value="'.$EL.'" class="textbox" ></td><td>
					<input type="text" name="SL" placeholder="SL" value="'.$SL.'"  class="textbox"></td><td>
					<input type="text" name="RH" placeholder="RH" value="'.$RH.'"  class="textbox"></td><td>
					<input type="text" name="DL" placeholder="DL" value="'.$DL.'"  class="textbox"></td><td>
					<input type="text" name="LWP" placeholder="LWP" value="'.$LWP.'"  class="textbox" ></td><td>
					<input type="hidden" name="namee"  value="'.$row['Name'].'"  class="textbox" >
					<input type="submit" class="btn btn-success" name="submit_adddata" onclick="myFunction()" id="'. $row['Name'].'" value="Save"></td>
					</form>';
       
		//echo '<td>'.$row['CL'].'</td>';
		//echo '<td>'.$row['ExL'].'</td>';
		/*echo '<td>'.$row['EL'].'</td>';
		echo '<td>'.$row['SL'].'</td>';
		echo '<td>'.$row['RH'].'</td>';
		echo '<td>'.$row['DL'].'</td>';
		echo '<td>'.$row['LWP'].'</td>';*/
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';

	
 ?>
                            </div>
                            <!-- /.table-responsive -->
                         <?php echo $adddata_error;?>   
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
