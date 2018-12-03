<?php
$dbcon=mysqli_connect("localhost","root","","eyuran");
if(!$dbcon){
	die("Connection failed: " . mysqli_connect_error());
}
?>