<?php
session_start();

if (isset($_SESSION['id']))
{
	$userid = $_SESSION['id'];
}

?>

<?php

$extra_id = $_POST['extra_id'];

include("dbcon.php");

$sql = "DELETE FROM tblcart WHERE RollId = '$userid' AND extra_id = '$extra_id'";

mysql_query($sql);

echo "<script>alert('Item Successfully Removed $extra_id');</script>";
echo "<script>window.location.href = 'cart.php';</script>";
?>
 