<?php
	include('../../include/session.php');
	
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include('../../include/header.php'); ?>
</head>

<body>
<?php include('../../include/functions.php'); ?>
    <div id="wrapper">
        <?php include('../../include/faculty-nav.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Leave Application Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form
                        </div>
						<div class="panel-body">
                    <!--<p><span class="error">* required field.</span></p>-->
  <form  class="form-horizontal" role="form" method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
      <label class="control-label col-sm-1" for="name">Name</label>
      <div class="col-lg-10">
	  <!--<p class="form-control-static"></p>-->
        <input type="text" class="form-control" id="disabledInput" placeholder="<?php echo $name; ?>" name="name" value="<?php echo $name;?>" disabled>
		<input type="hidden" class="form-control" id="name" placeholder="<?php echo $name; ?>" name="name" value="<?php echo $name;?>" >
		 <?php echo $nameErr;?></span>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-lg-1" for="id">Employee ID</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="d_emp_id" placeholder="Enter Emp ID" name="emp_id" value="<?php echo $emp_id;?>" disabled>
		<input type="hidden" class="form-control" id="emp_id" placeholder="Enter Emp ID" name="emp_id" value="<?php echo $emp_id;?>" >
		 <?php echo $emp_idErr;?></span>
      </div>
    </div>
    
	
	<div class="form-group">
      <label class="control-label col-sm-1" for="id">Leave Type</label>
      <div class="col-sm-10">
			<select class="form-control" id="sel1" name="drop">
			<option value="0">--Select Leave--</option>
			<option value="<?php echo $CL; ?>" <?php echo $s1; ?> >CL</option>
			<option value="<?php echo $ExL; ?>" <?php echo $s2; ?> >ExL</option>
			<option value="EL" <?php echo $s3; ?> >EL</option>
			<option value="SL" <?php echo $s4; ?> >SL</option>
			<option value="RH" <?php echo $s5; ?> >RH</option>
			<option value="DL" <?php echo $s6; ?> >DL</option>
			<option value="LWP" <?php echo $s7; ?> >LWP</option>
			</select>
			<span class="error">* <?php echo $dropErr;?></span>
		</div>
	</div>
	
	<div class="form-group">
      <label class="control-label col-sm-1" for="day">Day(s)</label>
      <div class="col-sm-10">
	<label class="radio-inline">
      <input type="radio" name="day" <?php if (isset($day) && $day=="half") echo "checked";?>  value="<?php echo $half;?>" <?php  echo $c1; ?> >Half
    </label>
    <label class="radio-inline">
      <input type="radio" name="day" <?php if (isset($day) && $day=="full") echo "checked";?>  value="<?php echo $full;?>" <?php  echo $c2; ?> >Full
    </label>
	<span class="error">* <?php echo $dayErr;?></span>
	</div>
	</div>
    
	<div class="form-group">
      <label class="control-label col-sm-1" for="start_date">Start Date</label>
      <div class="col-sm-10">
		<div class="hero-unit">
                <input type="date" name="start_date" value="<?php echo $start_date;?>" >
				<span class="error">* <?php echo $start_dateErr;?></span>
         </div>
        </div>
		</div>
	
	<div class="form-group">
      <label class="control-label col-sm-1" for="end_date">End Date</label>
      <div class="col-sm-10">
		<div class="hero-unit">
                <input type="date" name="end_date" value="<?php echo $end_date;?>" >
				<span class="error">* <?php echo $end_dateErr;?></span>
         </div>
        </div>
		</div>
		
	<div class="form-group">
      <label class="control-label col-sm-1" for="reason">Reason</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="reason" placeholder="Enter Reason For Leave Application " name="reason" value="<?php echo $reason;?>" >
		<span class="error">* <?php echo $reasonErr;?></span>
      </div>
    </div>	
	
	<div class="form-group">
      <label class="control-label col-sm-1" for="caddress">Contact Adress</label>
      <div class="col-sm-10">
	<textarea class="form-control" rows="5" id="caddress" placeholder="Enter Contact Address " name="caddress"></textarea>
	</div>
    </div>	
	
	
	<div class="form-group">
      <label class="control-label col-sm-1" for="cnumber">Contact Number</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cnumber" placeholder="Enter Contact Number " name="cnumber">
      </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-primary" value="Submit" name="submit_form">
		<input type="submit" class="btn btn-outline btn-primary" value="Check Balance After Application" name="submit3">
      </div>
    </div>
	
	
  </form>
  </div>
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
<?php
if( isset($_POST['submit_form']) )
{
	if( empty($nameErr) && empty($dayErr) &&  !empty($name) &&  !empty($day) && !empty($_POST['drop']) ) 
	{
		$type_leave=$_POST['drop'];
		if($_POST['day'] == 'half')
		{
			$num_days=0.5;
			//echo '<br>'.'TRUEPART';
		}
		else
		{
			//echo '<br>'.'FALSEPART';
			$num_days=get_days_latest($_POST['start_date'],$_POST['end_date']);
			$num_days=$num_days+'1';
		}
		//echo $num_days;
		$sql = "INSERT INTO application
			(name,emp_id,type_leave,day,start_date,end_date,reason,caddress,cnumber,num_days) 
			VALUES ( '$_POST[name]','$_POST[emp_id]','$type_leave','$_POST[day]','$_POST[start_date]','$_POST[end_date]','$_POST[reason]','$_POST[caddress]','$_POST[cnumber]','$num_days')";

		$result = mysqli_query( $connection ,$sql);
		if(! $result )
		{
			die('Could not enter data: ' . mysqli_error($connection));
		}
		//echo "Entered data successfully\n";
		//mysqli_close($connection);
		echo '<div id="wrapper">
			<div id="page-wrapper">
            <div class="row">
            <div class="col-lg-12"><div class="alert alert-success">
                               Application Sent!!
                            </div></div></div></div></div>';
	}
	else
	{
		echo "Check for the inputs in the given fields !";
		echo $nameErr;
		echo $dayErr;
		echo $emp_idErr;
        echo $dayErr;
		echo $dropErr;
		echo $start_dateErr;
		echo $end_dateErr;
		echo $reasonErr;
	}
}

elseif( isset($_POST['submit3']) )
{
	$leave="";
	echo '<div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12"><div class="panel panel-green">
                        <div class="panel-heading">
                            Balance If Application is approved
                        </div>
						<div class="panel-body">';
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
	
	
	if($_POST['day'] === "full" )
	{
		$num_days=get_days_latest($_POST['start_date'],$_POST['end_date']);
		$num_days=$num_days+'1';
	}
	else
	{
		$num_days=0.5;
	}
	$sql="select * from demo where name='$name'";

	$result=mysqli_query($connection,$sql);
	while($row = mysqli_fetch_array($result))
	{
		            
   
	//echo "day".$_POST['day'];
	$leave=$_POST['drop'];
		//echo "LT:".$leave;
		$row[$leave]=$row[$leave]-$num_days;
	//echo "drop".$_POST['drop']."drop";
        echo "<tr>";
        echo '<td>'.$row['Name'].'</td>';
		
		echo '<td>'.($row['CL']).'</td>';
		echo '<td>'.($row['ExL']).'</td>';
		echo '<td>'.($row['EL']).'</td>';
		echo '<td>'.($row['SL']).'</td>';
		echo '<td>'.($row['RH']).'</td>';
		echo '<td>'.($row['DL']).'</td>';
		echo '<td>'.($row['LWP']).'</td>';
    }
    echo '</tr>';
	}
echo '</tbody>';
echo '</table>';
echo '</div></div></div></div></div></div>'

?>
</html>
