<?php include('dbcon.php'); ?>
<?php
$user_query  = mysqli_query($dbcon, "SELECT * from admin where id = '$session_id'")or die(mysqli_error());
$user_row =mysqli_fetch_array($user_query);

?>     
    <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
					<ul class="nav">
					<li><a href="dasboard.php"><i class="icon-home icon-large"></i>&nbsp;Laman Utama</a></li>
                    <li><a href="class.php"><i class="icon-file icon-large"></i>&nbsp;Kelas</a></li>
                    <li><a href="subject.php"><i class="icon-file icon-large"></i>&nbsp;Jenis Yuran</a></li>
					<li><a href="transaction.php"><i class="icon-list-alt icon-large"></i>&nbsp;Transaksi</a></li>
					<li  class="active"><a href="students.php"><i class="icon-group icon-large"></i>&nbsp;Pelajar</a></li>
					<li><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Log Keluar</a></li>
					</ul>
					 <div class="pull-right">
						<div class="admin">Selamat Datang: <?php echo $user_row['UserName']; ?></div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
 
