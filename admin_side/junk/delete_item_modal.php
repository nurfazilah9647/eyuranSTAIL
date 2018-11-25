	<div id="delete_item<?php echo $extra_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-danger">Are you Sure you want to Delete this Data <?php echo $extra_id; ?>?</div>

		</div>
		<div class="modal-footer">
			<a class="btn btn-danger" href="delete_item.php<?php echo '?id='.$extra_id; ?>">Yes</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
