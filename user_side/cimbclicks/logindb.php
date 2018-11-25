<?php 
session_start();
include("connection.php");
error_reporting(E_ERROR | E_PARSE);
?>

<?php
$_SESSION['amount'];
$totalamount = $_SESSION['amount'];
?>

<?php
$_GET['trans'];
$trans = $_GET['trans'];

//echo $trans;
//echo $_SESSION['newtrans'];
?>

<?php

if (isset($_SESSION['user_id']))
{
	$userid = $_SESSION['user_id'];
}
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['pass'];

$run = mysqli_query($con, "SELECT * FROM user WHERE user_username='$username' AND user_pass='$password'");
while($row1=mysqli_fetch_array($run)){
	$user_id = $row1['user_id'];
	$deposit = $row1['user_deposit'];
}
	if(mysqli_num_rows($run)==1){
	$_SESSION['user'] = $user_id;
	$_SESSION['username'] = $username;
	$_SESSION['deposit']= $deposit;
	echo "<script>alert('Log Masuk berjaya, terus ke pembayaran')</script>";
	echo "<script>window.location.href='\web_pay_confirm.php'  </script>";
	//header('Location:web_pay_confirm.php?trans='."$trans".'');
	
	}
}

?>