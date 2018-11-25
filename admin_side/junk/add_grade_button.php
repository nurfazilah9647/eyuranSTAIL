							<?php include('add_grade_modal.php') ?>
							<?php include('dbcon.php') ?>
										<?php
							$student_query=mysql_query("SELECT * from tblstudents where RollId = '$get_id'")or die(mysql_error());
							$row = mysql_fetch_array($student_query);
							$status = $row['Status'];
		
							?>
							<?php if ($status == 'Inactive')
									{
										?>
										<p><a href="#add_grade_advance" data-toggle="modal"  class="btn"><i class="icon-plus"></i>&nbsp;Subject with  Pre Requisites</a></p>
								
										<?php include('add_grade_advance_modal.php') ?>
										<?php 
									}
								  else if ($status == 'Active')
								  	{
									?>
										<p><a href="#add_grade" data-toggle="modal"  class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add Marks</a></p>
										<?php 
									}
								  if($status == 'Inactive')
								  	{							
									  	?>
										<p><a href="#add_grade_advance1" data-toggle="modal"  class="btn btn-warning"><i class="icon-plus"></i>&nbsp;Subject with no Pre Requisites</a></p>
										<?php include('add_grade_advance_modal1.php') ?>
										<?php 
									}
							?>