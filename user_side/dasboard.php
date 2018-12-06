<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
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

<button class="button button1" style="
    height: 46px;
">Semak Yuran</button>
<button class="button button1" style="
    height: 46px;
">Cara Pembayaran Yuran</button>
<button class="button button1" style="
    height: 46px;
">Cetak Resit Pembayaran </button>



				</div>
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>