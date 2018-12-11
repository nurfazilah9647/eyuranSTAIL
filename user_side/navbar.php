		
	<div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
					<ul class="nav">
				
					
					<?php				
					if (!isset($_SESSION['id'])){ ?> 

						  <li class="divider-vertical"></li>
								<li class="">
								<a  rel="tooltip"  data-placement="bottom" title="Laman UtamaS" id="home" href="dashboard.php"><i class="icon-home icon-large"></i>&nbsp; Laman Utama</a> 
								</li>
						  <li class="divider-vertical"></li>
								<li class="">
								<a rel="tooltip"  data-placement="bottom" title="Click Here to Login" id="login" href="#student"  data-toggle="modal"><i class="icon-signin icon-large"></i>&nbsp; Log Masuk</a> 
								</li>
						
						<li class="divider-vertical"></li>					
		
					<?php  } 

					else
						{ ?>
					<?php
					include('dbcon.php');
					$query=mysqli_query($dbcon ,"SELECT * from tblstudents where RollId='$session_id' ")or die(mysql_error());
					$row=mysqli_fetch_array($query);
					?>
					
					<li class="active">
						<a href=""  data-toggle="dropdown" ><i class="icon-cog icon-large"></i></a>

					<ul class="dropdown-menu">
					<li><a href="change_password.php"><i class="icon-pencil icon-large"></i>&nbsp; Tukar Kata Laluan</a></li>
					<li><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp; Log Keluar</a></li>
					</ul>
   

					</li>	
					<li class="active"><a  rel="tooltip"  data-placement="bottom" title="Home" id="home1"  href="dasboard.php"><i class="icon-home icon-large"></i></a></li>
					<li>
						<a href="dasboard.php"> Selamat Datang:&nbsp;
						<strong class="name1"><?php echo $row['StudentName']?></strong></a>
					</li>
					<li>
						<a href="cart.php"> e-Yuran <strong class="name1"></strong></a>
					</li>
					<li>
						<a href="viewpurchase.php"> Rekod Transaksi <strong class="name1"></strong></a>
					</li>					
					<?php } ?>
			
					</ul>
					 				

                    </div>
                </div>
            </div>
        </div>
    <!-- Modal student login -->
	<div id="student" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header"><div class="alert alert-info"> Sila Masukkan Maklumat Yang Diperlukan.</div></div>
		<div class="modal-body">
			<form class="form-horizontal" method="post" action="login.php">
				<div class="control-group">
					<label class="control-label" for="inputEmail"> ID Pelajar</label>
					<div class="controls">
					<input type="text" id="inputEmail" name="RollId" placeholder="ID Pelajar" required>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword"> Kata Laluan </label>
					<div class="controls">
					<input type="password" id="inputPassword" name="password" placeholder="Kata Laluan" required> 
					<p>Jika anda kali pertama log masuk , sila gunakan 1234 sebagai kata laluan. 
				</div>
				</div>
				<div class="control-group">
					<div class="controls">
					<button type="submit" name="login" class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp; Log Masuk</button>
				</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp; Tutup</button>
		</div>
    </div>
	     	