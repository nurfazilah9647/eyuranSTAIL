<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php include('dbcon.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>

				<div class="span12">
				<div class="login">
				<div class="log_txt">
				<p><strong>Sila Masukkan Maklumat Berikut..</strong></p>
				</div>
						<form class="form-horizontal" method="POST">
								<div class="control-group">
									<label class="control-label" for="inputEmail">nama Pengguna</label>
									<div class="controls">
									<input type="text" name="username" id="username" placeholder="Username" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword">Kata Laluan</label>
									<div class="controls">
									<input type="password" name="password" id="password" placeholder="Password" required>
								</div>
								</div>
								<div class="control-group">
									<div class="controls">
									<button id="login" name="submit" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Hantar</button>
								</div>
								</div>
								
								<?php
								if (isset($_POST['submit'])){
								session_start();
								$username = $_POST['username'];
								$password = $_POST['password'];
								$query = "SELECT * FROM admin WHERE UserName='$username' AND Password='$password'";
								$result = mysqli_query($dbcon,$query)or die(mysqli_error());
								$num_row = mysqli_num_rows($result);
									$row=mysqli_fetch_array($result);
									if( $num_row > 0 ) {
										header('location:dasboard.php');
								$_SESSION['id']=$row['id'];
									}
									else{ ?>
								<div class="alert alert-danger">Access Denied</div>		
								<?php
								}}
								?>
						</form>
				
				</div>
			</div>
				
			</div>
		</div>
	</div>

