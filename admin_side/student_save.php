<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$rollid=$_POST['rollid'];
$name=$_POST['name'];
$studentemail=$_POST['emailid'];
$date=$_POST['dob']; 
$class=$_POST['class']; 
$gender=$_POST['gender']; 

								
mysql_query("INSERT into tblstudents (StudentName,RollId,StudentEmail,Gender,ClassId,DOB,pass, Status)
 values('$name','$rollid','$studentemail','$gender','$class','$date', '1234', 'Active')")or die(mysql_error());
header('location:students.php');
}
?>	