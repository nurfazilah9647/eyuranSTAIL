	<div id="edit<?php echo $extra2_row['trans'] . $extra2_row['extra_id']; ?>" href="#edit<?php echo $extra2_row['trans'] . $extra2_row['extra_id']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">

	<form class="form-horizontal" method="post">
					<div class="control-group">
						<label class="control-label" for="inputEmail">Transaksi</label>
						<div class="controls">
						<input type="text"  name="trans" placeholder="trans" value="<?php echo $extra2_row['trans']; ?>" readonly >
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">ID Yuran</label>
						<div class="controls">
						<input type="text" name="item_id"  placeholder="Item ID" required value="<?php echo $extra2_row['extra_id']; ?>" readonly>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">Nama Yuran</label>
						<div class="controls">
						<input type="text" name="item_name"  placeholder="Item Name" required value="<?php echo $extra2_row['extra_name']; ?>" readonly>
						</div>
					</div>					

				
					<div class="control-group">
						<div class="controls">
						<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;&nbsp; Lengkap</button>
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
	
	$trans=$_POST['trans'];
	$item_id=$_POST['item_id'];
	
	mysql_query("UPDATE tblcart set status='Completed' where trans='$trans' AND extra_id='$item_id'")or die (mysql_error()); ?>
	<script>
	window.location="transaction.php";
	</script>
	<?php
	}
	?>