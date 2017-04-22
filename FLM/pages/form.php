<?php
	include('../include/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include('../include/header.php'); ?>
</head>

<body>
<?php include('../include/functions.php'); ?>
    <div id="wrapper">
        <?php include('../include/faculty-nav.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Leave Application Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <p><span class="error">* required field.</span></p>
  <form class="form-horizontal" role="form" method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
      <label class="control-label col-sm-3" for="name">Name</label>
      <div class="col-sm-7">
	  <p class="form-control-static"><?php echo $name; ?></p>
        <input type="hidden" class="form-control" id="name" placeholder="Enter Full Name" name="name" value="<?php echo $name;?>">
		<span class="error">* <?php echo $nameErr;?></span>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-3" for="id">Employee ID</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="emp_id" placeholder="Enter Emp ID" name="emp_id" value="<?php echo $emp_id;?>">
		<span class="error">* <?php echo $emp_idErr;?></span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="department">Department</label>
      <div class="col-sm-7">
	<p class="form-control-static">CE</p>
	</div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-3" for="id">Leave Type</label>
      <div class="col-sm-7">
			<select class="form-control" id="sel1" name="drop">
			<option value="0">--Select Leave--</option>
			<option value="<?php echo $CL; ?>" <?php echo $s1; ?> >CL</option>
			<option value="<?php echo $ExL; ?>" <?php echo $s2; ?> >ExL</option>
			<option value="EL" <?php echo $s1; ?> >EL</option>
			<option value="SL" <?php echo $s2; ?> >SL</option>
			<option value="RH" <?php echo $s1; ?> >RH</option>
			<option value="DL" <?php echo $s2; ?> >DL</option>
			<option value="LWP" <?php echo $s2; ?> >LWP</option>
			</select>
			<span class="error">* <?php echo $dropErr;?></span>
		</div>
	</div>
	
	<div class="form-group">
      <label class="control-label col-sm-3" for="day">Day(s)</label>
      <div class="col-sm-7">
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
      <label class="control-label col-sm-3" for="start_date">Start Date</label>
      <div class="col-sm-7">
		<div class="hero-unit">
                <input type="date" name="start_date" value="<?php echo $start_date;?>" >
				<span class="error">* <?php echo $start_dateErr;?></span>
         </div>
        </div>
		</div>
	
	<div class="form-group">
      <label class="control-label col-sm-3" for="end_date">End Date</label>
      <div class="col-sm-7">
		<div class="hero-unit">
                <input type="date" name="end_date" value="<?php echo $end_date;?>" >
				<span class="error">* <?php echo $end_dateErr;?></span>
         </div>
        </div>
		</div>
		
	<div class="form-group">
      <label class="control-label col-sm-3" for="reason">Reason</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="reason" placeholder="Enter Reason For Leave Application " name="reason" value="<?php echo $reason;?>" >
		<span class="error">* <?php echo $reasonErr;?></span>
      </div>
    </div>	
	
	<div class="form-group">
      <label class="control-label col-sm-3" for="caddress">Contact Adress</label>
      <div class="col-sm-7">
	<textarea class="form-control" rows="5" id="caddress" placeholder="Enter Contact Address " name="caddress"></textarea>
	</div>
    </div>	
	
	
	<div class="form-group">
      <label class="control-label col-sm-3" for="cnumber">Contact Number</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="cnumber" placeholder="Enter Contact Number " name="cnumber">
      </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="Submit" name="submit_form">
		<input type="submit" class="btn btn-default" value="Check Balance After Application" name="submit3">
      </div>
    </div>
	
	
  </form>
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
<?php
if( isset($_POST['submit_form']) )
{
	if( empty($nameErr) && empty($dayErr) &&  !empty($name) &&  !empty($day) && !empty($_POST['drop']) ) 
	{
		$type_leave=$_POST['drop'];
		if($_POST['day'] == 'half')
		{
			$num_days=0.5;
			echo '<br>'.'TRUEPART';
		}
		else
		{
			echo '<br>'.'FALSEPART';
			$num_days=get_days_latest($_POST['start_date'],$_POST['end_date']);
			$num_days=$num_days+'1';
		}
		echo $num_days;
		$sql = "INSERT INTO application
			(name,emp_id,type_leave,day,start_date,end_date,reason,caddress,cnumber,num_days) 
			VALUES ( '$_POST[name]','$_POST[emp_id]','$type_leave','$_POST[day]','$_POST[start_date]','$_POST[end_date]','$_POST[reason]','$_POST[caddress]','$_POST[cnumber]','$num_days')";

		$result = mysqli_query( $connection ,$sql);
		echo "THE POSITIBE EXEXUUMM";
		if(! $result )
		{
			die('Could not enter data: ' . mysqli_error($connection));
		}
		echo "Entered data successfully\n";
		//mysqli_close($connection);
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
	/*echo "<h2>Your Input:</h2>";
	echo $name;
	echo "<br>";
	if ( !empty($type_leave) )
		echo $day;
	echo "<br>";
	if ( !empty($type_leave) )
		echo $type_leave;
	if ( !empty($start_date) )
		echo $start_date;*/

}
/*elseif( isset($_POST['submit2']) )
{
	echo '<table id="t01">';
	echo '<thead>';
	echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>CL</th>';
    echo '<th>ExL</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	$old_id=0;
	$sql="select * from demo where name='$name'";

	$result=mysqli_query($connection,$sql);
	while($row = mysqli_fetch_array($result))
	{
		//echo $row['Name'];
			if( $old_id != $row['Name'] ) {
          echo "<tr><td colspan=1>".$row['Name']."</td>";
          $old_id = $row['Name'];
    } 
	else 
	{
        echo "<tr>";
        echo '<td>'.$row['Name'].'</td>';
        echo '<td>'.$row['CL'].'</td>';
        echo '<td>'.$row['ExL'].'</td>';
    }
    echo '</tr>';
	}

echo '</tbody>';
echo '</table>';
}*/
elseif( isset($_POST['submit3']) )
{
	$leave="";
	//echo "Lol";
	echo '<table id="t01">';
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
	
	$old_id=0;
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
		//echo $row['Name'];
			if( $old_id != $row['Name'] ) 
			{
          echo "<tr><td colspan=1>".$row['Name']."</td>";
          $old_id = $row['Name'];
    } 
	else 
	{
	echo "day".$_POST['day'];
	$leave=$_POST['drop'];
		//echo "LT:".$leave;
		$row[$leave]=$row[$leave]-$num_days;
	//echo "drop".$_POST['drop']."drop";
        echo "<tr>";
        echo '<td>'.$row['Name'].'</td>';
		//$leave=$_POST['drop'];
		//echo "LT:".$leave;
		//$row[$leave]=$row[$leave]-$num_days;
		//echo $row[$leave];
		/*if( $_POST['drop']=="CL")
		{
			echo '<td>'.($row['CL']-$num_days) .'</td>';
			echo '<td>'.$row['ExL'].'</td>';
		}
		elseif( $_POST['drop']=="ExL")
		{
			echo '<td>'.($row['CL']).'</td>';
			echo '<td>'.($row['ExL']-$num_days).'</td>';
		}*/
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
}

/*$lol=get_days("2015-01-01","2015-01-09");
echo $lol->format("%a");

get_date_range("2015-01-01","2015-01-09");*/
?>
</html>
