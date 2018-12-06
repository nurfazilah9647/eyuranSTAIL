<?php
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($dbcon, "DELETE from tblstudents where Rollid='$id'") or die(mysqli_error($dbcon));
header('location:students.php');
?>