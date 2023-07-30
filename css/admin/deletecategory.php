<?php 
$id = $_GET['id'];
include "dbconfigure.php";
$query = "delete from category where id=$id";
my_iud($query);
header("location:viewcategory.php");
?>