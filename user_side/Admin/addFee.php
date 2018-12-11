<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
$studentId = $_GET['id'];
$query=mysqli_query($dbcon, "SELECT * from admin where UserName='$session_id'")or die(mysql_error());
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

<?php
 if (isset($_POST['add'])){
	
	 $id = $_POST['id'];
	 $jumlah = $_POST['jumlah'];
	 $tarikh = $_POST['tarikh'];

	 $query = "INSERT INTO tblfees (studentId, feeId, amount, feeDate, status, resit)
	 							VALUES ('$studentId', '$id', '$jumlah', '$tarikh', 'Belum Bayar','')";
	 $result = mysqli_query($dbcon,$query)or die(mysqli_error());
     
 }
?>
</head>
<body>

	<h3>Tambah Yuran </h3>
	<form method="post" name="add">
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon3">Id Yuran</span>
			<input type="text" name="id" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
		</div>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon3">Jumlah (RM)</span>
			<input type="text" name="jumlah" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
		</div>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon3">Tarikh</span>
			<input type="date" name="tarikh" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
		</div>
		<input type="submit" name="add"/>
      
	</form>


				</div>
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>