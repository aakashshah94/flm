<?php
	include('include/session.php');
?>
<?php
	echo "P";
	
	if($login_session_admin == "1")
	{
		header("location:admin");
	}
	else
	{
		header("location:faculty");
	}
?>