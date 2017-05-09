<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
		if (empty($_POST['fname']) || empty($_POST['lname'])|| empty($_POST['email'])|| empty($_POST['telephone'])|| empty($_POST['psw'])) {
		$error = "Username or Password is invalid";
		}
		else
		{
		// Define $username and $password
		$logemail=$_POST['email'];
		$password=$_POST['psw'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$telephone=$_POST['telephone'];
		
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysql_connect("localhost", "root", "dbfood2017");
		$db = mysql_select_db("dbfood", $connection);
		// SQL query to fetch information of registerd users and finds user match.
		$query1="insert into users (loginemail, password, Fname, Lname, Blance, Telphone) values (
			'$logemail','$password','$fname', '$lname', '0','$telephone')";
		$queryInsert=mysql_query($query1);
		$rows =1;
		if ($rows == 1) {
		$_SESSION['login_user']=$logemail; // Initializing Session
		header ('location: userpage.php');
		}
		else {
		$error = "Username or Password is invalid";
		}
		mysql_close($connection); // Closing Connection
		}
	
}
?>