<?php
include('dbcon.php');
$id=$_GET['id'];
mysql_query("DELETE from tblclasses where id='$id'")or die(mysql_error());
mysql_query("DELETE from tblsubjectcombination where ClassId='$id'")or die(mysql_error());
header('location:class.php');
?>