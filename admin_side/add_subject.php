	<div id="add_subject" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">

	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Kod</label>
				<div class="controls">
				<input type="text"  name="code" placeholder="Code" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Subject Title</label>
				<div class="controls">
				<input type="text" name="title"  placeholder="Subject Title" required>
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['submit'])){
	$code=$_POST['code'];
	$title=$_POST['title'];
	
	mysql_query("INSERT into tblsubjects (SubjectCode,SubjectName) 
	values('$code','$title')") or die(mysql_error());
	}
	?>