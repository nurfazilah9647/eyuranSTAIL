<?php
session_start();
include("connection.php");
error_reporting(E_ERROR | E_PARSE);
	
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
	background-image:url(cimb.jpg);
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
	margin-left:98px;
}
</style>
</head>

<body>
<div id="login">
  <div id="TabbedPanels1" class="TabbedPanels">
      <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent">

<?php
$_GET['trans'];
$trans = $_GET['trans'];
$_SESSION['newtrans'] = $trans;
echo $trans;
?>
          	<?php
	        
			$totalamount = $_GET['totalamount'];
			echo $totalamount;

				if (isset($_SESSION['id']))
					{
						$RollId = $_SESSION['id'];
				        echo $RollId;
					}
	     	?>
<br />
<br />
<br />

<div align="left">

<form action="logindb.php" method="post">
<input type="text" name="username" />
<input type="password" name="pass" />
<input type="submit" name="login" value="Log In">
<input type="hidden" name="totalamount" value="<?php echo $totalamount; ?>" />
<button onClick="window.open('<?php echo $return_url;?>','_self'); return false;">Cancel</button>
</form>

</div>
</div>
    </div>
    <br>
    
  </div>
 
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



