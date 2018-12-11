
<?php function back(){
    // header("Location: cart.php");
}
?>
<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php
$feeId = $_GET['id'];
$query=mysqli_query($dbcon, "SELECT * from tblstudents where RollId='$session_id'")or die(mysql_error());
$row=mysqli_fetch_array($query);
 ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>
				<div class="span2">
					<?php include('user_sidebar.php'); ?>
				</div>
				<div class="span10">
			
				        
</style>
</head>
<body>

<!-- <form method="post">	 -->

<div class="jumbotron">
  <h1>Cara-cara Membayar!</h1>
  <p>1. Anda boleh membuat pembayaran yuran melalui pindahan wang menggunakan mesin ATM ataupun melalui perbankan internet.</p>
  <p>2. Setelah selesai membuat transaksi, sila ambil gambar resit dan upload kepada kami.</p>
  <p> </p>
  
</div>



</div>
				
</div>
</div>
</div>


</form>

<div style="
    margin-left: 259px;
    margin-top: 20px;
">
<form method="POST" enctype="multipart/form-data">
    <label>File: </label><input type="file" name="image" />
    <input type="submit" />
</form>
</div>

<?php 

    //$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!

    if(!empty($_FILES['image']['tmp_name']) 
     && file_exists($_FILES['image']['tmp_name'])) {

    $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    move_uploaded_file($_FILES["image"]["tmp_name"], "resit/" . $_FILES["image"]["name"]);
    $location = "resit/" . $_FILES["image"]["name"];
    $sql = "UPDATE `tblfees` SET `status` = 'Processing' , `resit` = '$location' where `feeId` = '$feeId' ";
    if (!mysqli_query($dbcon,$sql)) { // Error handling
        
    }
    else{
    back();
    }
}

?>
	</div>
</div>

<?php include('footer.php') ?>