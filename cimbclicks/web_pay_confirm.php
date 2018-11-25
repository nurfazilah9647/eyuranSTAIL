<?php 
session_start();
include("connection.php")
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
	background-image:url(cimb_2.jpg);
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
	margin-top:220px;
	width:312px;
	height:182px;
	margin-left:500px;
}
</style>
</head>

<body>
<div align="center">
		<div id="login">
		  <div id="TabbedPanels1" class="TabbedPanels">
		      <div class="TabbedPanelsContentGroup">
		      <div class="TabbedPanelsContent">

		<?php
		error_reporting(E_ERROR | E_PARSE);
		?>	
		<?php
		$_SESSION['amount'];
		$totalamount = $_SESSION['amount'];
		?>
		
		<?php
		$return_url = $_SESSION['return_url'];
		$cancel_url = $_SESSION['cancel'];
		$user_id = $_SESSION['user'];
		$username = $_SESSION['username'];
		$deposit = $_SESSION['deposit'];
		$trans= $_GET['totalamount'];
		//echo $trans;
		$newtrans = $_SESSION['newtrans'];
		//echo $newtrans;
		$userid = $_SESSION['user_id'];
		if (isset($_SESSION['id']))
		{
			$RollId = $_SESSION['id'];
		        //echo $RollId;
		}
		?><br />
		<br />

		<h2>Username: <?php echo $username;?></h2>
		<h3>Total Saving: RM <?php echo $deposit;?></h3><br />
		<br />
		<h2>Payment Details <?php echo $business;?></h2>
		<table>
		<tr><th colspan="3" align="left">Order ID : <?php echo $_SESSION['newtrans'];?></th></tr>
		<!--<tr><th colspan="3" align="left">Order ID : <?php echo $username;?></th></tr>-->
		<tr><th colspan="3" align="left">Student ID : <?php echo $RollId;?></th></tr>
		<tr><th colspan="3" align="left">Total : RM <?php echo $totalamount;?></th></tr>
		<tr><td><form action="" method="get"><button type="submit" name="confirm">Pay</button></td><td></td><td><button onClick="window.open('<?php echo $cancel_url;?>','_self'); return false;">Cancel</button></td></tr>

		</table>

		<br />
		<br />
		<br />
</div>
<script type="text/javascript" src="css/mootools.js"></script> 
<script type="text/javascript" src="css/bumpbox-2.0.1.js" ></script> 
<script type="text/javascript">
//names,inSpeed,outSpeed,boxColor,backColor,bgOpacity,bRadius,borderWeight,borderColor,boxShadowSize,boxShadowColor,iconSet,effectsIn,effectsOut
doBump('.bx2',850, 500, 'FFF', '6b7477', 0.7, 7, 2 ,'333', 15,'000', 2, Fx.Transitions.Back.easeOut, Fx.Transitions.linear);
</script>

<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");

</script>
</body>
</html>
<?php  
if(isset($_GET['confirm'])){
	
	$balance = $deposit - $totalamount;
	$balance_update = mysqli_query($con, "UPDATE user SET user_deposit='$balance' where user_id='$user_id'");
	if($balance_update){
		
		$_SESSION['deposit'] = $balance;
		
	echo "<script>alert('Pembayaran Berjaya')</script>";
        header('Location:confirm.php?trans='."$newtrans".'');
	//echo "<script>window.open('confirm.php?code='."$code".','_self')</script>"; //'."$code".'
	}
	
}

?>