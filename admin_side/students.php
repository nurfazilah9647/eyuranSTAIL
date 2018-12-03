<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_students.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Students Table</strong>
                                </div>

                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                             
								<p><a href="add_student.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add New Student</a></p>
							
                                <thead>
                                    <tr>
                                        <th>Student ID</th>                 
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Username</th>                                                               
                                        <th>Password</th>
                                        <th>Gender</th>   										
                                        <th>DOB</th>
                                        <th>Class</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
							<!--SELECT * from tblstudents JOIN tblclasses where tblstudents.ClassId = 1 AND tblclasses.id = 1-->
                                	<?php
                                  		$user_query=mysqli_query($dbcon, "SELECT * from tblstudents ") or die(mysqli_error());
										while($row=mysqli_fetch_array($user_query)){
										$id=$row['RollId'];

										$student_class_id = $row['ClassId']; 
										$class_query = mysqli_query($dbcon,"SELECT * from tblclasses where id = '$student_class_id'")or die(mysqli_error());
										$class_row = mysqli_fetch_array($class_query);
										$class_id =  $class_row['id']; 
									?>
									<tr class="del<?php echo $id ?>">
									<td><?php echo $row['RollId']; ?></td> 
                                    <td><?php echo $row['StudentName']; ?></td>
									<td><?php echo $row['StudentEmail']; ?></td>
									<td><?php echo $row['RollId']; ?></td>
									<td><?php echo $row['pass']; ?></td>
									<td><?php echo $row['Gender']; ?></td>
									<td><?php echo $row['DOB']; ?></td>
									<td><?php echo $class_row['ClassName']; ?></td>
									<td><?php echo $row['Status']; ?></td>

									<?php	

									?>
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="100">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_student_modal.php'); ?>
										<a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_student.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>