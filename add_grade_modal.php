				<?php include('dbcon.php'); ?>
				<div id="add_grade" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div id="add_grade" class="modal-body">
						<div class="alert alert-info">Add New Marks</div>
				<form class="form-horizontal" method="post">
				<input type="hidden" name="student_id" value="<?php 

				echo $get_id; ?>" /> 
			<?php
			$student_query = mysql_query("SELECT * from tblstudents where RollId = '$get_id'");
			$student_row = mysql_fetch_array($student_query);
			$status = $row['Status'];
			$student_class_id = $student_row['ClassId']; 

			$class_query = mysql_query("SELECT * from tblclasses where id = '$student_class_id'")or die(mysql_error());
			$class_row = mysql_fetch_array($class_query);
			$class_id =  $class_row['id'];

			$mark_query = mysql_query("SELECT * from tblresult")or die(mysql_error());
			$mark_row = mysql_fetch_array($mark_query);
			$mark_id =  $mark_row['marks'];

			?>

			<div class="control-group">
				
				<div class="controls"> 
				
				<option></option>
				<?php
				$a=0;				
				$query = mysql_query("SELECT * from tblsubjectcombination JOIN tblsubjects where ClassId = '$class_id' AND tblsubjects.id = tblsubjectcombination.SubjectId") or die(mysql_error());
				while($row = mysql_fetch_array($query))
				{ 
					$a++;
					?>
					<input type="hidden" name="code<?php echo $a; ?>" value="<?php echo $row['SubjectId']; ?>">
					SUBJECT :&nbsp;&nbsp;<input type="text" class="text1"  value="<?php echo $row['SubjectName']; ?>" disabled> &nbsp;&nbsp;
					
					MARK :
					<input type="text" class="span1" name="ave<?php echo $a; ?>" required>

					<?php
				} 
				?>
				<input type="hidden" name="test" value="<?php echo $a; ?>">
				
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
	$test = $_POST['test'];
	for($b = 1; $b <=  $test; $b++)
	{
	
		$student_id=$_POST['student_id'];
		$test1 = "code".$b;
		$test2 = "ave".$b;
		$code=$_POST[$test1];
		$ave =$_POST[$test2];
	
	?>
	
	<?php
	
	$subject_query  = mysql_query("SELECT * from tblsubjects where id = '$code' ")or die(mysql_error());
	$subject_row = mysql_fetch_array($subject_query);
	
	$query = mysql_query("SELECT * from tblresult JOIN tblsubjectcombination JOIN tblclasses where tblsubjectcombination.SubjectId = '$code' and RollId = '$student_id' AND tblresult.SubjectId = tblsubjectcombination.SubjectId AND tblclasses.id = tblresult.ClassId")or die(mysql_error());
	$count = mysql_num_rows($query);
	
	if ($count > 0){ ?>

		<?php
	}else{
	
	
	 { 
	 mysql_query("INSERT into tblresult (SubjectId,RollId,ClassId,marks) values('$code','$student_id','$class_id','$ave')")or die(mysql_error()); 
	 } 

	}
	
	
	}
	
	 
	}
	?>
	