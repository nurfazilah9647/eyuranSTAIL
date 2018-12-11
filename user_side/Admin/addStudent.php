<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
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
	
	 $nama = $_POST['nama'];
	 $username = $_POST['username'];
	 $email = $_POST['email'];
	 $kelas = $_POST['kelas'];
	 $lahir = $_POST['lahir'];
	 $jantina = $_POST['jantina'];

	 $query = "INSERT INTO tblstudents (StudentName, StudentId, RollId, StudentEmail, Gender, DOB, ClassId, pass, RegDate, UpdationDate, Status)
	 							VALUES ('$nama', '$username', '$username', '$email', '$jantina', $lahir,'$kelas', '1234', '', '','Active')";
	 $result = mysqli_query($dbcon,$query)or die(mysqli_error());
     
 }
?>
</head>
<body>

	<h3>Dafter Pelajar </h3>
	<form method="post" name="add">
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon3">Nama Pelajar</span>
			<input type="text" name="nama" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
		</div>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon3">Username</span>
			<input type="text" name="username" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
		</div>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon3">Email</span>
			<input type="text" name="email" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
		</div>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon3">Jantina</span>
			<select placeholder="Jantina" name="jantina" class="form-control" id="sel1" required>
				<option selected disabled> Jantina</option>
				<option value="Lelaki"> Lelaki</option>
				<option value="Perempuan" >Perempuan</option>
      		</select>
		</div>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon3">Tarikh Lahir</span>
			<input type="date" name="lahir" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
		</div>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon3">Kelas</span>
			<input type="text" name="kelas" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
		</div>
		<input type="submit" name="add"/>
      
	</form>


				</div>
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>