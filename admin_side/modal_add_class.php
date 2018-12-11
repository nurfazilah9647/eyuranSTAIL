	<div id="add_course" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info">Tambah Kelas</div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Kod</label>
				<div class="controls">
				<input type="text"  name="code" placeholder="Code" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Nama Kelas</label>
				<div class="controls">
				<input type="text" name="title"  placeholder="Class Name" required>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Simpan</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Tutup</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['submit'])){
	$code=$_POST['code'];
	$title=$_POST['title'];

		
$error_course=mysqli_query($dbcon, "select * from tblclasses where id='$code'")or die(mysqli_error());
 $count=mysqli_num_rows($error_course);
 
 if ($count  != 1){
	mysqli_query($dbcon, "INSERT into tblclasses (id,ClassName) values('$code','$title')")or die(mysqli_error($dbcon));
	}else{ ?>
	   <script type="text/javascript">
                        alert('Class Already Exist');
           </script>
	<?php
	} }
	?>