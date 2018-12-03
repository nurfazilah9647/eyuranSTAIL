<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_transaction.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span2">          			     								
			</div>
			<div class="span10">
			
			 <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Transaction Table</strong>
                                </div>
			
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                               
                                <thead>
                                    <tr>
                                        <th width="50">Trans</th>
                                        <th width="50">Item ID</th>
                                        <th width="200">Item Name</th>
                                        <th width="50">Type</th>
                                        <th width="70">Price</th> 
                                        <th width="50">Qty</th>
                                        <th width="20">Status</th>
                                        <th width="80">Paid Date</th>
                                        <th width="80">Action</th>  
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php
                                  	$user_query=mysqli_query($dbcon, "SELECT * from tblcart, tblextras WHERE tblcart.extra_id = tblextras.extra_id") or die(mysqli_error());
									
									while($extra2_row=mysqli_fetch_array($user_query))
									{
									?>
									<tr>
                                    <td><?php echo $extra2_row['trans']; ?></td> 
                                    <td><?php echo $extra2_row['extra_id']; ?></td>
                                    <td><?php echo $extra2_row['extra_name']; ?></td>
                                    <td><?php echo $extra2_row['extra_type']; ?></td>
									<td>RM <?php echo $extra2_row['extra_price']; ?></td>
									<td><?php echo $extra2_row['qty']; ?> unit(s)</td>
									<td><?php echo $extra2_row['status']; ?></td>												
									<td><?php echo $extra2_row['checkedon']; ?></td>							
                                    <td width="20">
                                        <a rel="tooltip"  title="Edit" id="e<?php echo $extra2_row['trans'] . $extra2_row['extra_id']; ?>" href="#edit<?php echo $extra2_row['trans'] . $extra2_row['extra_id']; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    	<?php include('edit_subject2.php'); ?>
									</td>
								
                                    </tr>
									<?php } ?>
                           
                                </tbody>
                            </table>

                            <td><form method="post" action="view_transaction.php"><input type="hidden" name="extra_id"
                                </form></td>            
							
            <a href="view_transaction.php" </a><input type="submit" value="More Info Button" class="button"/>
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>