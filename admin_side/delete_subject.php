<?php
include('dbcon.php');
$extra_id=$_GET['id'];
mysql_query("DELETE from tblextras where extra_id='$extra_id'")or die(mysql_error());
header('location:subject.php');
?>