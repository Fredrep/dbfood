
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="../../css/stylecss.css">
</head>
<body>

<form  method="post">
  <div class="imgcontainer">
    <img src="../../images/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" name="urn" placeholder="Enter Username"  required>

    <label><b>Password</b></label>
    <input type="password" name="pwd" placeholder="Enter Password" required>
       <div id="log">
            <input type="submit" name="submit" value="Login">
        </div> 
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>

  <?php
 include('login.php'); 
if(isset($_SESSION['login_user'])){
header("location: userpage.php");
}
?>


