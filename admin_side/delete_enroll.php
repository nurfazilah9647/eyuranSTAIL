<?php
include('dbcon.php');
include('delete_enroll_modal.php');
$idnew=$_GET['idnew'];
$id=$_GET['get_id'];
mysql_query("DELETE from tblsubjectcombination where SubjectId='$idnew' AND ClassId='$id'")or die(mysql_error());
header('location:class.php');
?>