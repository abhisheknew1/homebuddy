
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home Buddy</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<style>
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
</style>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-2">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <?php include"nav.php"?>
    <div style="height: 93px;"></div>

    <div class="unit-5 overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Admin Login</h2>
        <p class="mb-0 unit-6"><a href="../index.php">Home</a> <span class="sep">></span> <span>Admin Login</span></p>
      </div>
    </div>

    
	
	<div class="container" style = "margin-top : 40px ; ">
<h2 class = "text-center" style = "color : red ; font-weight : bold ; font-family : Castellar">Admin Login</h2>
<br>
<div class = "row">
<div class="col-sm-3">

</div>

<div class="col-sm-6">
<div class="form-group"> 
<form method=post>
<label><b>AdminName</b></label><input type = text name=adminname class="form-control">

<label><b>Password</b></label><input type = password name=password id="password-field" class="form-control"><span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
<input type = checkbox name=rem> Remember Me

<br>
<center><input type = submit name = submit value = Login style = "width : 200px" class="btn btn-primary">&nbsp;&nbsp;&nbsp;

</form>
</div>
</div>

<div class="col-sm-3">

</div>
</div>
</div>
<script>
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
	  
  </body>
</html>


<?php 
@session_start();
include "dbconfigure.php";
if(isset($_POST['submit']))
{
$adminname = $_POST['adminname'];
$password = $_POST['password'];
if(isset($_POST['rem']))
{
$remember = "yes";
}
else
{
$remember = "no";
}

$query = "select count(*) from admin where adminname='$adminname' and password='$password'";
$n = my_one($query);
if($n==1)
{
$_SESSION['semailid']=$adminname;
$_SESSION['spassword']=$password;

if($remember=="yes")
{
setcookie('cemailid',$adminname,time()+60*60*24*7);
setcookie('cpassword',$password,time()+60*60*24*7);
}
echo '<script>
window.location="adminhome.php";
</script>';
}
else
{
echo '<script>alert("Invalid Login Credentials.")</script>';
}
}
?>