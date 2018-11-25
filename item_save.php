<?php 
include('dbcon.php');
if (isset($_POST['submit'])){

$itemid=$_POST['itemid'];
$itemname=$_POST['itemname'];
$itemdesc=$_POST['itemdesc'];
$price=$_POST['price']; 
$itemtype=$_POST['itemtype']; 
								
mysql_query("INSERT into tblextras (extra_id,extra_name,extra_desc,extra_price,extra_type)
 values('$itemid','$itemname','$itemdesc', '$price', '$itemtype')") or die(mysql_error());
header('location:subject.php');
}
?>	