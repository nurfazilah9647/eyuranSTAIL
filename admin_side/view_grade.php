<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
<?php include('navbar_students.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
	<div class="logo_Sti"></div>
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
			<?php
			$student_query=mysql_query("SELECT * from tblstudents JOIN tblclasses where RollId = '$get_id'")or die(mysql_error());
			$row = mysql_fetch_array($student_query);
			$status = $row['Status'];
		
			?>
			<div class="name">
				<span><strong>STUDENT NO. : </strong><?php echo $row['RollId']; ?></span>
				<span><strong>STUDENT NAME : </strong><?php echo $row['StudentName']; ?></strong></span>
				<span><strong>CLASS NAME : </strong><?php echo $row['ClassName']; ?></strong></span>
				<span id="print_right">
				</span>
			</div>
			
			<hr>

			</div>
			<div class="span2">
			<div id="add">
			<?php include('add_grade_button.php'); ?>				
			<?php include('add_grade_modal.php'); ?>
							
							
			</div>
			</div>
			<div class="span10">
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th width="100">Code</th>
                                        <th width="400">Subject</th>
                                        <th>Marks</th>           
                                        <th class="act"></th>       

                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("SELECT * from tblresult where RollId = '$get_id'") or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['id'];
									$marks = $row['marks'];
									$SubjectId = $row['SubjectId'];
									/* subject */
									$subject_query = mysql_query("SELECT * from tblsubjects where id = '$SubjectId'") or die(mysql_error());
									while($subject_row=mysql_fetch_array($subject_query)){
									?>
									<tr>
                                    <td><?php echo $subject_row['SubjectCode']; ?></td> 
                                    <td><?php echo $subject_row['SubjectName']; ?></td>
                                    <td><?php echo $row['marks']; ?></td>                                 
									</td>      

																 
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td class="act" width="100">
									
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_grade<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_grade_modal.php'); ?>
										<a href="#edit_student<?php echo $id; ?>" data-toggle="modal"   rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										<?php include('edit_grade.php'); ?>
                                    </td>
									
                                    </tr>
									<?php  }}  ?>
									
									
								
                                </tbody>
								<tfoot>
										
								</tfoot>
                            </table>
	
<hr>
			</div>		
			</div>

		</div>
					
    </div>
	
<?php include('footer.php') ?>