<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_item.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span2">			     
										<ul class="nav nav-tabs nav-stacked">
											<li>
											<a href="add_item.php"><i class="icon-plus icon-large"></i>&nbsp;<strong>Add New Items</strong></a>
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
                                        <th>Item ID</th>
                                        <th>Item Name</th>
                                        <th width="400">Description</th>
                                        <th>Price</th>
                                        <th>Type</th>                                                                
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $user_query=mysql_query("SELECT * from tblextras")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
								  $extra_id=$row['extra_id']; ?>
									<tr class="del<?php echo $extra_id ?>">
                                    <td><?php echo $row['extra_id']; ?></td> 
                                    <td><?php echo $row['extra_name']; ?></td>
                                    <td><?php echo $row['extra_desc']; ?></td> 
                                    <td><?php echo $row['extra_price']; ?></td>
                                    <td><?php echo $row['extra_type']; ?></td>
                                    <td width="90">
                                        <a  href="#delete_item<?php echo $extra_id; ?>" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
										<?php include('delete_item_modal.php'); ?>
                                        <a rel="tooltip"  title="Edit" id="e<?php echo $extra_id; ?>" href="#edit_item<?php echo $extra_id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    	<?php include('modal_edit_item.php'); ?>
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