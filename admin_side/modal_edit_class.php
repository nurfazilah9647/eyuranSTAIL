	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
	<div class="alert alert-info">Edit Kelas</div>
	<form class="form-horizontal" method="post">
					<div class="control-group">
						<label class="control-label" for="inputEmail">Kod Kelas</label>
						<div class="controls">
						
						<input type="text"  name="id" placeholder="id" required value="<?php echo $row['id']; ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">Nama Kelas</label>
						<div class="controls">
						<input type="text" name="title"  placeholder="ClassName" required value="<?php echo $row['ClassName']; ?>">
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
	$ClassName=$_POST['title'];

	mysql_query("UPDATE tblclasses set id='$id', ClassName='$ClassName' where id='$id'")or die(mysql_error()); ?>
	<script>
	window.location="class.php";
	</script>
	<?php
	}
	?>