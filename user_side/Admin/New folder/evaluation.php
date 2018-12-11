<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
$query=mysql_query("select * from students where student_id='$session_id'")or die(mysql_error());
$row=mysql_fetch_array($query);
$year_level = $row['year_level'];
$term = $row['term'];
 ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>
				<div class="span12">
				<div class="grade">
					<?php include('grade_option_evaluation.php'); ?>
				</div>
				</div>
				<div class="span2">
					<?php include('user_sidebar.php'); ?>
				</div>
				<div class="span10">
			
				          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Subject</th>
                                  
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from grade where student_id = '$session_id' and school_year = '$year_level' ") or die(mysql_error());
									
									while ($row=mysql_fetch_array($user_query))
									{
									$id=$row['grade_id'];
									$remarks = $row['remarks'];
									//$subject_id = $row['subject_id'];
									/* subject */
									$subject_query = mysql_query("select * from subject where year = '$year_level'")or die(mysql_error());
									while($subject_row=mysql_fetch_array($subject_query)){
									?>
									<tr>
                                    <td><?php echo $subject_row['code']; ?></td> 
                                    <td><?php echo $subject_row['title']; ?></td> 
									
                                    </tr>
									<?php  }}  ?>
                           
                                </tbody>
                            </table>
				</div>
			
			<?php
			
			if ($year_level == 'First Year') { ?>
			
			<form method="POST" action="sort_subject.php">
			<input type="hidden" name="student_id" value="<?php echo $session_id; ?>">
			<input type="hidden" name="term" value="2nd">
			<input type="hidden" name="year" value="First Year">
			<div class="span12">
			<div class="pull-right">
			<div>
			
			</div>
			</div>
			</div>
			</form>
			
			<?php
			}

			else if ($year_level == 'Second Year' ){ ?>
	
			<form method="POST" action="sort_subject.php">
			<input type="hidden" name="student_id" value="<?php echo $session_id; ?>">
			<input type="hidden" name="term" value="2nd">
			<input type="hidden" name="year" value="Second Year">
			<div class="span12">
			<div class="pull-right">
			<div class="sort_button">
			
			</div>
			</div>
			</div>
			</form>
				
			<?php }

			else if ($year_level == 'Third Year'){ ?>
				
			<form method="POST" action="sort_subject.php">
			<input type="hidden" name="student_id" value="<?php echo $session_id; ?>">
			<input type="hidden" name="term" value="2nd">
			<input type="hidden" name="year" value="Third Year">
			<div class="span12">
			<div class="pull-right">
			<div class="sort_button">
			
			</div>
			</div>
			</div>
			</form>
				
				
				
			<?php }

			else if ($year_level == 'Fourth Year'){ ?>
			
			<form method="POST" action="sort_subject.php">
			<input type="hidden" name="student_id" value="<?php echo $session_id; ?>">
			<input type="hidden" name="term" value="2nd">
			<input type="hidden" name="year" value="Fourth Year">
			<div class="span12">
			<div class="pull-right">
			<div class="sort_button">
			
			</div>
			</div>
			</div>
			</form>
			
			<?php } ?>
			
			
			</div>
		</div>
    </div>
<?php include('footer.php') ?>