<div class="test123">
	<form method="POST" action="sort_grade.php<?php echo '?id='.$get_id ?>">
			<input type="hidden" name="student_id" value="<?php echo $get_id; ?>">
			<div class="span1">
			<h4>Filter Grade</h4>
			</div>
				<div  class="span3">
				<label>Term</label>
				<select name="semester" required>
					<option></option>
					<option>1st</option>
					<option>2nd</option>
				</select>
			</div>	
			<div class="span4">
			<button name="sort" class="btn btn-info"><i class="icon-check"></i>Submit</button>
			<a name="sort" href="view_grade.php<?php echo '?id='.$get_id; ?>" class="btn btn-info" ><i class="icon-search"></i>&nbsp;View All</a>
				<button name="sort" onClick="window.print()";   class="btn btn-info" ><i class="icon-print"></i>&nbsp;Print</button>
			</div>
			</form>
			</div>
	
	