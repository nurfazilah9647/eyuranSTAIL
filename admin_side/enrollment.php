<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_subject.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span2">			     
							<ul class="nav nav-tabs nav-stacked">
								<li>
								<a href="#add_subject" data-toggle="modal" ><i class="icon-plus icon-large"></i>&nbsp;<strong>Tambah Yuran</strong></a>
								</li>
								
								<p><a href="add_enrollment.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Daftar Pelajar Baharu</a></p>
							</ul>
								
	<?php include('add_subject.php'); ?>
										
			</div>
			<div class="span10">
			
			 <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Jadual Pendaftaran</strong>
                                </div>
			
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                               
                                <thead>
                                    <tr>
                                        <th>Kod Yuran</th>
                                        <th>Jenis Yuran</th>                                 
                                        <th>Tarikh dibuat</th>
                                        <th>tarikh Akhir Kemaskini</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $user_query=mysql_query("SELECT * from tblsubjects") or die(mysql_error());
									while($row=mysql_fetch_array($user_query))
									{
										$id=$row['SubjectCode']; 
																	
									?>
									
									
                                    <td><?php echo $row['SubjectCode']; ?></td> 
                                    <td><?php echo $row['SubjectName']; ?></td> 
                                    <td><?php echo $row['Creationdate']; ?></td>
                                    <td><?php echo $row['UpdationDate']; ?></td>
                                    <td width="100">
                                        <a  href="#delete_subject<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
										<?php include('delete_subject_modal.php'); ?>
                                        <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    	<?php include('edit_subject.php'); ?>
									</td>
								
                                    </tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
							

			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>