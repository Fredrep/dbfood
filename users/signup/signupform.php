
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../../css/stylecssup.css">
</head>
<body>

<h2>Signup Form</h2>

<form method="post" class="formsignup">
  <div class="container">

    <label><b>First Name</b></label>
    <input type="text" placeholder="Enter Email" name="fname" required maxlength="35">

    <label><b>Last Name</b></label>
    <input type="text" placeholder="Enter Email" name="lname" required maxlength="35">


    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required maxlength="35">

    <label><b>Telephone</b></label>
    <input type="text" placeholder="Enter Telephone" name="telephone" required maxlength="15">


    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required minlength="8" maxlength="35">

    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required minlength="8" maxlength="35">
    <input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <input type="submit" class="signupbtn" name="submit" value="Sign Up">
    </div>
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