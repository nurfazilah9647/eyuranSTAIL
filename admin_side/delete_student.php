<?php
include('dbcon.php');
$id=$_GET['id'];
mysql_query("DELETE from tblstudents where Rollid='$id'") or die(mysql_error());
header('location:students.php');
?>