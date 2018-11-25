<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php

$_SESSION['code'] = rand();
$code = $_SESSION['code'];

?>
<?php

$query=mysql_query("SELECT * from tblstudents where RollId='$session_id'")or die(mysql_error());
$row=mysql_fetch_array($query);
 ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>
					<div class="span2">
				
				</div>
			
				          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">


		<div class="box mb0" id="viewpextra">
			<div class="box-content-1">
				<div class="box-product-1" >
					<center>
					<?php
						// Included configuration file in our code.
						include('dbcon.php');?>
<?php

$extra_id = $_POST['extra_id'];
$qty = $_POST['txtQty'];
$RollId = $_POST['RollId'];

$today = date("Y-m-d H:i:s");

include("dbcon.php");

$sqlcode = "SELECT * FROM tblcart WHERE RollId = '$RollId' AND status = 'Pending'";
$query = mysql_query($sqlcode);

$sqltrans = "UPDATE tblcart SET trans = '$code' WHERE RollId = '$RollId' AND status = 'Pending'";
mysql_query($sqltrans);

$sql = "SELECT COUNT(*) FROM tblcart WHERE RollId = '$RollId' AND extra_id = '$extra_id' AND status = 'Pending'";
$query2 = mysql_query($sql);

$row = mysql_fetch_row($query2);
$rows = $row[0];

if($rows == 0)
{
	$insertSQL = "INSERT INTO tblcart (cart_id, extra_id, qty, RollId, status, added, checkedon, trans) VALUES ('', '$extra_id', '$qty', '$RollId', 'Pending', '$today', '', $code)";
	mysql_query($insertSQL);
	
	if($insertSQL)
	{
		echo "<script>alert('Item Added in Cart!')</script>";
		echo "<script>window.location.href='cart.php';</script>";
	}
	else
	{
		echo "<script>alert('An error occured. Please try again later.')</script>";
		echo "<script>window.location.href='dasboard.php';</script>";
	}
}

else
{
	$sql1 = "SELECT * FROM tblcart WHERE extra_id = '$extra_id' AND RollId = '$RollId' AND status = 'Pending'";

	$query = mysql_query($sql1);
	while($row=mysql_fetch_array($query))
	{
		$cartid = $row['cart_id'];
		$extra_id = $row['extra_id'];
		$actualqty = $row['qty'];
		$RollId = $row['RollId'];
		$status = $row['status'];
		$added = $row['added'];
		$trans = $row['trans'];
	}
	
	$actualqty = ($actualqty + $qty);
	
	$updateqty = "UPDATE tblcart SET cart_id = '$cartid', extra_id = '$extra_id', qty = '$actualqty', RollId = '$RollId', status = '$status', added = '$today', checkedon = '', trans = '$code' WHERE RollId = '$RollId' AND extra_id = '$extra_id' AND status = 'Pending'";
	mysql_query($updateqty);
	
	if($updateqty)
	{
		echo "<script>alert('Item Updated !')</script>";
		echo "<script>window.location.href='cart.php';</script>";
		
	}
	else
	{
		echo "<script>alert('An error occured. Please try again later.')</script>";
		echo "<script>window.location.href='dasboard.php';</script>";
	}
}
?>