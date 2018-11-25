 <?php
date_default_timezone_set("Asia/Muscat");
session_start();

if (isset($_SESSION['id']))
{
	$RollId = $_SESSION['id'];
}
?>

<?php
$_SESSION['amount'];
$totalamount = $_SESSION['amount'];
?>

<?php

include("dbcon.php");

$sql = "SELECT * FROM tblcart WHERE RollId = '$RollId' AND status = 'Pending'";
$query = mysql_query($sql);

while($row = mysql_fetch_array($query))
{
	$id = $row['id'];
	$extra_id = $row["extra_id"];
	$qty = $row["qty"];
	$RollId = $row["RollId"];
	$status = $row['status'];
	$added = $row['added'];
	$checked = $row['checkedon'];
	$trans = $row['trans'];
	$today = date("Y-m-d H:i:s");

	$sql = "UPDATE tblcart SET status = 'Paid', checkedon = '$today' WHERE trans = '$trans'";
	mysql_query($sql);
}
	
	echo "<script>alert('Thank You for Your Purchase!')</script>";
	echo "<script>window.location.href='cimbclicks/login.php?trans=$trans&totalamount=$totalamount'  </script>";

	// remove all session variables
	//session_unset(); 

	// destroy the session 
	//session_destroy();
?>
 