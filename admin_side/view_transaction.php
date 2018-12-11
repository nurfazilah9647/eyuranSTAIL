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
$result = mysqli_query($dbcon , $sql2) or die(mysqli_error($dbcon));//conn for check connection
?>

<P><strong><center>Report</strong></center>
<table border= "1" width="849" align="center" cellspacing="2" cellpadding="2">

<tr>

<td align="center" bgcolor="#FFCC00"><strong>Nama Pelajar</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Jenis Yuran</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Kod Yuran</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Quantity</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>ID Pelajar</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Status</strong></td>
<td align="center" bgcolor="#FFCC00"><strong> Waktu Pembayaran</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Transaksi</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Status</strong></td>


</tr>

<?php

while ($row=mysqli_fetch_array($result))
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
