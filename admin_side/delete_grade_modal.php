	<div id="delete_grade<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-danger">Anda pasti untuk memadamkan maklumat ini?</div>
			<form method="post" action="delete_grade.php">
			<input type="hidden" name="get" value="<?php echo $get_id; ?>">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			
		
			
		</div>
		<div class="modal-footer">
			<button name="delete" class="btn btn-danger"><i class="icon-check icon-large"></i>&nbsp;Ya</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Tutup</button>
		</div>
			</form>
    </div>
	
