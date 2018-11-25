<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
include ('dbcon.php');

$sql2="SELECT * from view_transaction ORDER BY StudentName ASC";
$result = mysql_query($sql2) or die(mysql_error());//conn for check connection
?>

<P><strong><center>Report</strong></center>
<table border= "1" width="849" align="center" cellspacing="2" cellpadding="2">

<tr>

<td align="center" bgcolor="#FFCC00"><strong>Student Name</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Item name</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Item ID</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Quantity</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Roll ID</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Status</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Added Time</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Transaction</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Check Done</strong></td>


</tr>

<?php

while ($row=mysql_fetch_array($result))
{
	echo"<tr>";
	echo"<td>" .$row["StudentName"]. "</td>"; 
	echo"<td>" .$row["extra_name"]. "</td>";
	echo"<td>" .$row["extra_id"]. "</td>";
	echo"<td>" .$row["qty"]. "</td>";
	echo"<td>" .$row["RollId"]. "</td>";
	echo"<td>" .$row["status"]. "</td>";
	echo"<td>" .$row["added"]. "</td>";
	echo"<td>" .$row["trans"]. "</td>";
	echo"<td>" .$row["checkedon"]. "</td>";
	
}
echo"</table>";
echo "<center>";
echo "<br>";

?>




</body>
</html>
