<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "dbfood2017");
// Selecting Database
$db = mysql_select_db("dbfood", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select login from dbfood.admins where login='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['login'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: admin.php'); // Redirecting To Home Page
}
?>
