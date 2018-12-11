<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
<?php include('navbar_class.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
	<div class="logo_Sti"></div>
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
			<?php
			$student_query=mysql_query("SELECT * from tblstudents ORDER BY StudentName")or die(mysql_error());
			$row = mysql_fetch_array($student_query);
			
			?>
			
			<div class="span10">
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th width="100">Kod Yuran</th>
                                        <th width="400">Jenis Yuran</th>
                                        <th width="50">Action</th>     
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  
									$subject_query = mysql_query("SELECT * from tblsubjectcombination JOIN tblsubjects where ClassId = '$get_id' AND tblsubjectcombination.SubjectId = tblsubjects.id") or die(mysql_error());
									
									while($subject_row=mysql_fetch_array($subject_query)){
									$idnew = $subject_row['id'];
									?>
									<tr>
                                    <td><?php echo $subject_row['id']; ?></td> 
                                    <td><?php echo $subject_row['SubjectName']; ?></td>
                                    <td><a rel="tooltip"  title="Delete" id="<?php echo $subject_row['id']; ?>" href="#delete_enroll<?php echo $subject_row['id']; ?>" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_enroll_modal.php'); ?></td>                             
									</td>      

                                    </tr>

									<?php  } ?>
									<?php $idnew = $subject_row['id']; ?>
									
								
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