	<div id="edit_student<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info">Update Grade</div>
	<form class="form-horizontal" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>" /> 
			<div class="control-group">
				<?php
				$student_query = mysql_query("select * from tblstudents where RollId = '$get_id' ");
				$student_row = mysql_fetch_array($student_query);
				?>	
				<label class="control-label" for="inputEmail">Subject Code</label>
				<div class="controls">
					<input type="hidden" name="SubjectId" value="<?php echo $row['SubjectId'];  ?>">
					<strong><?php echo $subject_row['SubjectCode'];  ?></strong>
				</div>
			</div>
			<div class="control-group">
				<?php
				$student_query = mysql_query("select * from tblstudents where RollId = '$get_id' ");
				$student_row = mysql_fetch_array($student_query);
				?>	
				<label class="control-label" for="inputEmail">Subject Name</label>
				<div class="controls">
					<input type="hidden" name="subjectname" value="<?php echo $subject_row['SubjectName'];  ?>">
					<strong><?php echo $subject_row['SubjectName'];  ?></strong>
				</div>
			</div>			

			<div class="control-group">
				<label class="control-label" for="inputPassword">Marks</label>
				<div class="controls">
					<input type="text" name="marks" placeholder ="<?php echo $row['marks'];  ?>">
					
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
				<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['edit']))
	{
		$id=$_POST['id'];
		$marks=$_POST['marks'];
		$SubjectId=$_POST['SubjectId'];
	
		mysql_query("UPDATE tblresult set SubjectId = '$SubjectId', marks = '$marks' where id = '$id' ") or die(mysql_error());

	?>

<script>
   window.location = "view_grade.php<?php echo '?id='.$get_id;  ?>";    
</script>
<?php		
	}
	?>
	
	