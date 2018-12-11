<?php
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($dbcon, "DELETE from tblclasses where id='$id'")or die(mysqli_error($dbcon));
mysqli_query($dbcon, "DELETE from tblsubjectcombination where ClassId='$id'")or die(mysqli_error($dbcon));
header('location:class.php');
?>