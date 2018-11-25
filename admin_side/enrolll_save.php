<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$class=$_POST['class'];
$subject=$_POST['subject']; 
$status=1;
					
mysql_query("INSERT into tblsubjectcombination (ClassId, SubjectId, status)
 values('$class','$subject','$status')") or die(mysql_error());
header('location:class.php');
}
?>	