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
</head>
<body>
<a href="addStudent.php">
<button class="button button1" style="
    height: 46px;
">Daftar Pelajar</button>
</a>
<a href="studentList.php">
<button class="button button1" style="
    height: 46px;
">Tambah Yuran</button>
</a>
<a href="feeList.php">
<button class="button button1" style="
    height: 46px;
">Senarai Yuran</button>
</a>



				</div>
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>