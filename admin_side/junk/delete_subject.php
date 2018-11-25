<?php
include('dbcon.php');
$id=$_GET['id'];
mysql_query("DELETE from tblsubjects where SubjectCode='$id'")or die(mysql_error());
header('location:subject.php');
?>