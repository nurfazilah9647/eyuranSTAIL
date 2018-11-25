	<form method="POST" action="sort_subject.php">
			<input type="hidden" name="student_id" value="<?php echo $session_id; ?>">
			<div class="span3">
			<div class="sort"><i class="icon-filter icon-large"></i>&nbsp;FILTER Subject</div>
			</div>
			
			<div  class="span3">
				<label>Year Level</label>
				<select rel="tooltip"  data-placement="bottom" title="Click here to Select Option" id="select" name="year" required>
					<option></option>
					<option>First Year</option>
					<option>Second Year</option>
					<option>Third Year</option>
					<option>Fourth Year</option>
				</select>
			</div>
			<div class="span3">
					<label></label>

			</div>
		
			<div class="span2">
			<div class="sort_button">
			<button rel="tooltip"  data-placement="bottom" title="Click here to submit" id="sort"  name="sort" class="btn btn-info"><i class="icon-check icon-large"></i>&nbsp;Submit</button>
			</div>
			</div>
			</form>