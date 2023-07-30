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
    
	
	<script src = https://code.jquery.com/jquery-3.3.1.js></script>
<script src = https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js></script>
<script src = https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js></script>
<script src = https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js></script>
<script src = https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js></script>
<script src = https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js></script>
<script src = https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js></script>

<link rel = stylesheet href=https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css>
<link rel = stylesheet href=https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css>
	
	
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
        <h2 class="mb-0">View Reg. Users</h2>
        <p class="mb-0 unit-6"><a href="../index.php">Home</a> <span class="sep">></span> <span>Reg. Users</span></p>
      </div>
    </div>

    
<?php 
$query = "select * from registration";
$rs = my_select($query);

?>


<div class="container" style = "margin-top : 20px ; ">

 <div class="table-responsive">
<table class="table table-hover" id=example>
<thead style = 'background-color : red ; color : white'>
<tr>
<th>UserName</th>
<th>Contact</th>
<th>EmailID</th>
<th>City</th>
<th>Address</th>
<th>Experience</th>
<th>ID Proof</th>
<th>ID Pic</th>
<!--
<th>WorkType</th>
<th>WorkSubType</th>
-->
<th>UserPic</th>
<th>Delete</th>
</tr>
</thead>
<tbody style = 'background-color : lightblue ; color : black'>
<?php 
while($row=mysqli_fetch_array($rs))
{
echo "<tr>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";

echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";


$loc1 = "../images/".$row[9];
echo "<td><img src = $loc1 width=150 height=150></td>";


//echo "<td>$row[11]</td>";


$loc2 = "../images/".$row[12];
echo "<td><img src = '$loc2' width=150 height=150></td>";


echo "<td><a class= 'btn btn-danger' href='deleteuser.php?id=$row[0]'>Delete</a></td>";
echo "</tr>";
}
?>
</tbody>
</table>
</div>
</div>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
</script>
</body>
</html>