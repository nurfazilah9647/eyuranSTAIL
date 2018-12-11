	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
	<div class="alert alert-info">Edit Yuran</div>
	<form class="form-horizontal" method="post">
					<div class="control-group">
						<label class="control-label" for="inputEmail">ID Yuran</label>
						<div class="controls">
						
						<input type="text"  name="id" placeholder="id" required value="<?php echo $row['extra_id']; ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">Jenis Yuran</label>
						<div class="controls">
						<input type="text" name="name"  placeholder="ItemName" required value="<?php echo $row['extra_name']; ?>">
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
	
	$id=$_POST['id'];
	$extra_name=$_POST['name'];

	mysql_query("UPDATE tblclasses set extra_id='$id', extra_name='$extra_name' where extra_id='$id'")or die(mysql_error()); ?>
	<script>
	window.location="item.php";
	</script>
	<?php
	}
	?>