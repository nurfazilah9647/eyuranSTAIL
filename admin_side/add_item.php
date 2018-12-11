<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_item.php'); ?>
<?php $con=mysqli_connect("localhost","root","","srms"); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Tambah Yuran</div>
			<p><a href="subject.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Kembali</a></p>
	<div class="addstudent">
	<div class="details">Sila Masukkan Maklumat </div>		
	<form class="form-horizontal" method="POST" action="item_save.php" enctype="multipart/form-data">
		<div class="control-group">
			<label class="control-label" for="inputEmail">ID Yuran:</label>
			<div class="controls">
			<input type="text" id="itemid" name="itemid" placeholder="Item ID" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Nama Yuran</label>
			<div class="controls">
			<input type="text" id="itemname" name="itemname" placeholder="Item Name" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Penerangan:</label>
			<div class="controls">
			<input type="text" id="itemdesc" name="itemdesc" placeholder="Item Description" required>
			</div>
		</div>		
				<div class="control-group">
			<label class="control-label" for="inputEmail">Jenis yuran:</label>
			<div class="controls">
			<input type="text" id="itemtype" name="itemtype" placeholder="book, fee, etc..." required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Jumlah (RM): </label>
			<div class="controls">
			<input type="text" id="price" name="price" placeholder="15.50" required>
			</div>
		</div>	

		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Simpan</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>