<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","flm-hp");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select * from login where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
$login_session_emp_id =$row['emp_id'];
$login_session_admin =$row['admin'];
if(!isset($login_session) )
{
	mysqli_close($connection); // Closing Connection
	header('Location: ../index.php'); // Redirecting To Home Page
}
?>