<?php 
$id = $_GET['id'];
include "dbconfigure.php";
$query = "delete from registration where id=$id";
my_iud($query);
header("location:regusers.php");
?>