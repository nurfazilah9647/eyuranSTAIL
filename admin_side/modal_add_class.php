	<div id="add_course" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info">Add Class</div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Code</label>
				<div class="controls">
				<input type="text"  name="code" placeholder="Code" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Class Name</label>
				<div class="controls">
				<input type="text" name="title"  placeholder="Class Name" required>
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

		
$error_course=mysql_query("select * from tblclasses where id='$code'")or die(mysql_error());
 $count=mysql_num_rows($error_course);
 
 if ($count  != 1){
	mysql_query("INSERT into tblclasses (id,ClassName) values('$code','$title')")or die(mysql_error());
	}else{ ?>
	   <script type="text/javascript">
                        alert('Class Already Exist');
           </script>
	<?php
	} }
	?>