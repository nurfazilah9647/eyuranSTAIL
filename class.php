<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_class.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span2">			     
										<ul class="nav nav-tabs nav-stacked">
											<li>
											<a href="#add_course" data-toggle="modal" ><i class="icon-plus icon-large"></i>&nbsp;<strong>Add New Class</strong></a>
											</li>
										</ul>
										
										 
     <!-- Modal add user -->
	<?php include('modal_add_class.php'); ?>
										
			</div>
			<div class="span10">
			
			
					
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Class Table</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Class Code</th>
                                        <th>Class Name</th>
                                        <th>Create Date</th>
                                        <th>Last Update Date</th>                                                                
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $user_query=mysql_query("SELECT * from tblclasses")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['id']; ?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['id']; ?></td> 
                                    <td><?php echo $row['ClassName']; ?></td>
                                    <td><?php echo $row['CreationDate']; ?></td> 
                                    <td><?php echo $row['UpdationDate']; ?></td>
                                    <td width="150">
                                        <a  href="#delete_course<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
										<?php include('delete_class_modal.php'); ?>
                                        <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    	<?php include('modal_edit_class.php'); ?>
                                        
                                    	
									</td>
									
									     <!-- Modal edit user -->
								
                                    </tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
							

			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>