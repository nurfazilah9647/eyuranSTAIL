<?php 
session_start();
include("connection.php");
error_reporting(E_ERROR | E_PARSE);

$username = $_SESSION['username'];
$balance = $_SESSION['deposit'];

$order_id = $_SESSION['order_id'];
$business = $_SESSION['business'];
$order_id = $_SESSION['order_id'];
$amount = $_SESSION['amount'];
$return_url = $_SESSION['return_url'];
//$cancel_url = $_SESSION['cancel'];
$user_id = $_SESSION['user_id'];
$code = $_SESSION['code'];
echo $code;
if (isset($_SESSION['user_id']))
{
	$user_id = $_SESSION['user_id'];
        echo $user_id;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CIMB Clicks</title>

<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />

<style>
body
{
	background-image:url(cimb3.jpg);
	background-position:center;
	background-repeat:no-repeat;
	margin:0;
	padding:0;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size:11px;
}
#login 
{
	margin:auto;
	margin-top:445px;
	width:312px;
	height:182px;
	margin-left:310px;
}
</style>
</head>

<body>
<div align="left">
		<div id="login">
		  <div id="TabbedPanels1" class="TabbedPanels">
		      <div class="TabbedPanelsContentGroup">
		      <div class="TabbedPanelsContent">


Username : <?php echo $username;?><br />
Balance in Account : RM <?php echo $balance ?><br />
<?php

unset($_SESSION["user"]);
unset($_SESSION["username"]);
?>

<form action="../../user_side/index.php" method="post">
<!--<input type="hidden" name="trx_id" value="<?php echo rand(1000,10000)?>" />
<input type="hidden" name="order_id" value="<?php echo $order_id;?>" />
<input type="hidden" name="amount" value="<?php echo $_SESSION['amount'];?>" />
<input type="hidden" name="pay_date" value="<?php echo date("Y-m-d H:i:s");?>" />-->
<input type="hidden" name="amount" value="<?php echo $_SESSION['id'];?>" />
<!--<input type="hidden" name="code" value="<?php echo $code;?>" />-->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="success" value="Main Page" />

</form>
</body>
</html>