	<div id="delete_enroll<?php echo $idnew; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-danger">Anda pasti untuk memadamkan maklumat ini?<?php echo'? Id='.$idnew; ?>?</div>
			<div class="alert alert-danger">Anda pasti untuk memadamkan maklumat ini?<?php echo'? Id='.$get_id; ?>?</div>
		</div>
		<div class="modal-footer">
			<a class="btn btn-danger" href="delete_enroll.php <?php echo '?id='.$idnew.$get_id; ?>">Ya</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Tutup</button>
		</div>
    </div>
	
