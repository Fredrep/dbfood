<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
		}
		else
		{
		// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysql_connect("localhost", "root", "dbfood2017");
		$db = mysql_select_db("dbfood", $connection);
		// SQL query to fetch information of registerd users and finds user match.
		$query = mysql_query("select login,password from dbfood.admins where password='$password' AND login='$username'", $connection);
		$rows = mysql_num_rows($query);
		if ($rows == 1) {
		$_SESSION['login_user']=$username; // Initializing Session
				$restrname = mysql_query("select RestName from dbfood.admins'", $connection);
				if($restrname=='MaxWay'){
				header("location: security/MaxWay.php"); // Redirecting To Other Page
				}
				if($restrname=='LavashCenter'){

					header("location: security/LavashCenter.php");
					echo "No Such a user!!!";
				}
		}
		else {
		$error = "Username or Password is invalid";
		}
		mysql_close($connection); // Closing Connection
		}
}
?>