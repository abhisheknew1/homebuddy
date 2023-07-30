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
    
    <?php include"nav2.php";
	include "dbconfigure.php";
	?>
    <div style="height: 93px;"></div>

    <div class="unit-5 overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Add Subcategory</h2>
        <p class="mb-0 unit-6"><a href="../index.php">Home</a> <span class="sep">></span> <span>Add Subcategory</span></p>
      </div>
    </div>

    
	
	<div class="container" style = "margin-top:50px">

<div class="form-group">
<form method = post enctype = "multipart/form-data">

<label><b>Category Name</b></label>
<select class="form-control" name = categoryid>
<?php
$sql = "SELECT * from category";
$rs = my_select($sql);
while ($row = mysqli_fetch_array($rs)){
echo "<option value='$row[0]'>$row[1] [$row[0]]</option>" ;
}
?>
</select>

<label><b>SubCategory Name</b></label>
<input type = text name = "subcategoryname" class="form-control">


<br>
<input type = submit name = submit value = "Submit" class="btn btn-primary form-control" >
</form>
</div>



</div>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
$categoryid = $_POST['categoryid'];
$subcategoryname = $_POST['subcategoryname'];

$query = "insert into subcategory(categoryid,subcategoryname) values($categoryid,'$subcategoryname')";

$n = my_iud($query);
if($n==1)
{
echo '<script>alert("Record Saved Successfully");
window.location = "viewsubcategory.php";
</script>';
}
else
{
echo '<script>alert("Something went wrong,Try Again!")</script>';
}
}
?>

	  
  </body>
</html>


