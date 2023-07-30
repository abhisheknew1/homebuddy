<?php 
$id = $_GET['id'];
include "dbconfigure.php";
$query = "delete from subcategory where id=$id";
my_iud($query);
header("location:viewsubcategory.php");
?>