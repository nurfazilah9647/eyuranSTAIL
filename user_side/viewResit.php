<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
$feeId = $_GET['id'];
$local = $_GET['location'];
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

	 $status = $_POST['status'];

	 if($status == 'Diterima')
	 {
		$query = "UPDATE tblfees SET status = 'Diterima'
   				WHERE feeId = '$feeId'";
	 $result = mysqli_query($dbcon,$query)or die(mysqli_error());
	 }
	 else{
		$query = "UPDATE tblfees SET status = '$status'
   				WHERE feeId = '$feeId'";
	 $result = mysqli_query($dbcon,$query)or die(mysqli_error());
	 }
     
 }
?>
</head>
<body>

	<h3>Resit Pembayaran </h3>
	<form method="post" name="add">
		<div class="embed-responsive embed-responsive-4by3">
  			<img src="<?php echo '../'.$local; ?>">
		</div>
		
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon3">Pengesahan</span>
			<select placeholder="Sahkan" name="status" class="form-control" id="sel1" required>
				<option selected disabled> Sahkan</option>
				<option value="Diterima"> Diterima</option>
				<option value="Ditolak(Gambar tidak jelas)" >Ditolak(Gambar tidak jelas)</option>
				<option value="Ditolak(Jumlah tidak betul)" >Ditolak(Jumlah tidak betul)</option>
				<option value="Ditolak(Nombor akaun salah)" >Ditolak(Nombor akaun salah)</option>
      		</select>
		</div>
		<input type="submit" name="add"/>
      
	</form>


				</div>
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>