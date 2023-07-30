<?php 
include "dbconfigure.php";
?>
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
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
    
	
	
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<style>
.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;

}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }

  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}



.prjdiv:hover{
transform:translateY(-10px)
}
div .container1{


background-color:lightgrey;
border-radius:8px;
}
.heading{
 padding:10Px;
}

</style>
	
	
	
	
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
    
    <?php include"nav2.php"?>
    <div style="height: 93px;"></div>

    <div class="unit-5 overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Admin Login</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep"></span> <span>Admin Login</span></p>
      </div>
    </div>

    
	
	
	<div class="container" style="margin-top:5%;">
    <div class="row" >
        <div class="col-md-4 prjdiv text-center">
            <div class="container1">
            <h2 class="heading" style="color:blue"><?php echo totaluser();?></h2>
            <a href="regusers.php"><h4 class= "heading" style="color:black">Reg. ServiceMens</h4>

        </a>
            </div>
        </div>
        <div  class="col-md-4 prjdiv text-center">
            <div class="container1">
            <h2 class="heading" style="color:blue"><?php echo totalcategory();?></h2>
            <a href="addcategory.php"><h4 class="heading" style="color:black">Category</h4>

            </a>
       </div>
        </div>
        <div  class="col-md-4 prjdiv text-center">
             <div class="container1">
            <h2 class="heading" style="color:blue"><?php echo totalsubcategory();?></h2>
            <a href="addsubcategory.php"><h4 class="heading" style="color:black">SubCategory</h4>
        </a>
             </div>
        </div>
         
    </div>
</div>




	<footer class="container pt-5 mt-2 text-center">



            <p style = "font-size : 30pt ; color : #FF0000 ; font-weight : bold">

            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All Rights Reserved By HOMEBUDDY
                
       

            </p>


    </footer>
	
	
  
  </body>
</html>


<?php 
function totaluser()
{
$query = "select * from registration";
$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}

function totalcategory()
{
$query = "select * from category";
$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}

function totalsubcategory()
{
$query = "select * from subcategory";
$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}
?>





