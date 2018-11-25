<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
$query=mysql_query("select * from students where student_id='$session_id'")or die(mysql_error());
$row=mysql_fetch_array($query);
$year_level = $row['year_level'];
$term = $row['term'];
$status = $row['student_status'];

 ?>
 <?php 

/* $school_year = "";
$semester = "";	 */


	$school_year = $_POST['school_year'];	



	$semester = $_POST['semester'];	


?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>
				<div class="span12">
				<div class="grade">
					<?php include('grade_option.php'); ?>
				</div>
				</div>
				<div class="span2">
					<?php include('user_sidebar.php'); ?>
				</div>
				<div class="span10">
			
		          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                        <thead>
                                    <tr>
                                        <th width="100">Code</th>
                                        <th width="300">Subject</th>
                                        <th width="50">Marks</th>                                 
                                        <th>Average</th>                                                                                 
                                        <th>Exam Term</th>                                                                             
                                        <th>Remarks</th>                                                                                 
                                    </tr>
                        </thead>
                        <tbody>
						 
                          	<?php  

                          	$user_query = mysql_query("select * from grade where student_id = $session_id and semester like '%$semester%' and school_year like '%$school_year%' ")or die(mysql_error());

							while($row = mysql_fetch_array($user_query))
							{
								$id = $row['grade_id'];
								$remarks = $row['remarks'];
								$subject_id = $row['subject_id'];
								$subject_query = mysql_query("select * from subject where subject_id = $subject_id ")or die(mysql_error());
								
								while($subject_row = mysql_fetch_array($subject_query))
								{

							?>
									<tr>
		                                <td><?php echo $subject_row['code']; ?></td> 
		                                <td><?php echo $subject_row['title']; ?></td>                                  
		                                <td><?php echo $row['gen_ave']; ?></td>                                      
		                                <td><?php echo $row['semester']; ?></td>                                      
		                                <td><?php echo $row['school_year']; ?></td>
									
									<?php if ($remarks == 'Very Good'){ ?>
									<td><span class="very_good"><?php echo $row['remarks']; ?></span></td>   
									<?php }else if($remarks == 'Excellent'){ ?>
									<td><span class="Excellent"><?php echo $row['remarks']; ?></span></td>   
									<?php }else if($remarks == 'Satisfactory'){ ?>  
									<td><span class="sat"><?php echo $row['remarks']; ?></span></td> 
									<?php }else if($remarks == 'Fair'){ ?>
									<td><span class="fair"><?php echo $row['remarks']; ?></span></td> 
									<?php }else if($remarks == 'Failed'){ ?>
									<td><span class="failed"><?php echo $row['remarks']; ?></span></td> 
									<?php }else if($remarks == 'Incomplete'){ ?>
									<td><span class="failed"><?php echo $row['remarks']; ?></span></td> 
									<?php }else if($remarks == 'Officially Dropped'){ ?>
									<td><span class="drop"><?php echo $row['remarks']; ?></span></td> 
									<?php }else if($remarks == 'PASS'){ ?>
									<td><span class="Excellent"><?php echo $row['remarks']; ?></span></td> 
									<?php } ?>	
										
	                                </tr>
							<?php 

								}
							}  

							?>
                   
                        </tbody>
                    </table>
				
									
							
								<?php include('sort_unit_table.php'); ?>
						
									    <table cellpadding="0" cellspacing="0" border="0" class="table  " id="example">                      
                                <thead>
                                    
                             
                            </table>
					
				</div>
								<?php include('grading_system.php') ?>
			</div>
		</div>
    </div>

<?php include('footer.php') ?>