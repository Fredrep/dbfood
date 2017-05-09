<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
		if (empty($_POST['urn']) || empty($_POST['pwd'])) {
		$error = "Username or Password is invalid";
		}
		else
		{
		// Define $username and $password
		$username=$_POST['urn'];
		$password=$_POST['pwd'];
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysql_connect("localhost", "root", "dbfood2017");
		$db = mysql_select_db("dbfood", $connection);
		// SQL query to fetch information of registerd users and finds user match.
		$query = mysql_query("select loginemail,password from dbfood.users where password='$password' AND loginemail='$username'", $connection);
		$rows = mysql_num_rows($query);
		if ($rows == 1) {
		$_SESSION['login_user']=$username; // Initializing Session
		header ('location: userpage.php');
		}
		else {
		$error = "Username or Password is invalid";
		}
		mysql_close($connection); // Closing Connection
		}
}
?>