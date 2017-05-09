<?php
include('security/login.php'); 
if(isset($_SESSION['login_user'])){
header("location: security/MaxWay.php");
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Page</title>
      <link rel="stylesheet" href="css/stylea.css">  
</head>

<body>
  <div class="login-page">
  <div class="form">
    <form class="login-form" method="post">
      <input type="text" name="username"  placeholder="username" maxlength="35" minlength="8" />
      <input type="password" name="password" placeholder="**********" maxlength="35"  minlength="8" />
      <div id="log">
      	<input type="submit" name="submit" value="Login">
      </div>
      
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/admin.js"></script>

</body>
</html>
