<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$student_id=$_POST['id'];
$studentname=$_POST['name'];
$rollid=$_POST['rollid']; 
$studentemail=$_POST['studentemail']; 
$gender=$_POST['gender']; 
$status=$_POST['status'];
$class=$_POST['class'];

mysql_query("UPDATE tblstudents set StudentName='$studentname', StudentEmail='$studentemail', Gender='$gender', Status='$status', ClassId='$class' where RollId='$id' ") or die(mysql_error());
								
								
header('location:students.php');
}
?>	