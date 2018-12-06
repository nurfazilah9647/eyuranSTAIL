	<?php
		include('dbcon.php');
		if (isset($_POST['login'])){
			session_start();
			$RollId = $_POST['RollId'];
			$password = $_POST['password'];
			$query = "SELECT * FROM tblstudents WHERE RollId='$RollId' AND pass='$password' ";
			$result = mysqli_query($dbcon,$query)or die(mysqli_error());
			$num_row = mysqli_num_rows($result);
			$row=mysqli_fetch_array($result);
			if( $num_row > 0 ) {
				header('location:dasboard.php');
				$_SESSION['id']=$row['RollId'];
									}
			else{ 
			header('location:access_denied.php');
								}}
								?>







								