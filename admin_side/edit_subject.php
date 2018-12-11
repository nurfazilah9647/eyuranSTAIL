	<div id="edit<?php echo $extra_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">

	<form class="form-horizontal" method="post">
					<div class="control-group">
						<label class="control-label" for="inputEmail">ID Yuran</label>
						<div class="controls">
						<input type="text"  name="code" placeholder="Code" required value="<?php echo $row['extra_id']; ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">Nama Yuran</label>
						<div class="controls">
						<input type="text" name="title"  placeholder="Subject Title" required value="<?php echo $row['extra_name']; ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">Penerangan</label>
						<div class="controls">
						<input type="text" name="desc"  placeholder="Subject Description" required value="<?php echo $row['extra_desc']; ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">Jumlah (RM)</label>
						<div class="controls">
						<input type="text" name="price"  placeholder="Item Price" required value="<?php echo $row['extra_price']; ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword"></label> Jenis<div class="controls">
						<input type="text" name="type"  placeholder="For Example: fee,book" required value="<?php echo $row['extra_type']; ?>">
						</div>
					</div>										
				
					<div class="control-group">
						<div class="controls">
						<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Kemaskini</button>
						</div>
					</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Tutup</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['edit'])){
	
	$code=$_POST['code'];
	$title=$_POST['title'];
	$desc=$_POST['desc'];
	$price=$_POST['price'];
	$type=$_POST['type'];
	
	mysql_query("UPDATE tblextras set extra_id = '$code', extra_name = '$title', extra_desc = '$desc', extra_price = '$price', extra_type = '$type' where extra_id='$code'")or die (mysql_error()); ?>
	<script>
	window.location="subject.php";
	</script>
	<?php
	}
	?>