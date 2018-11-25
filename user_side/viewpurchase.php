<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
$query=mysql_query("SELECT * from tblstudents where RollId='$session_id'")or die(mysql_error());
$row=mysql_fetch_array($query);
 ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>
				<div class="span2">
					
				</div>
				<div class="span10">
			
				          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th width="50">Trans</th>
                                        <th width="30">Item ID</th>
                                        <th width="200">Item Name</th>
                                        <th width="30">Type</th>
                                        <th width="50">Price</th> 
                                        <th width="20">Qty</th>
                                        <th width="20">Status</th>
                                        <th width="80">Paid Date</th>                                 
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  
                                  //SELECT * from tblstudents, tblcart, tblextras WHERE tblstudents.RollId = '$session_id' AND tblcart.RollId = '$session_id' AND tblcart.status ='Paid' AND tblcart.extra_id = tblextras.extra_id OR tblcart.status ='Completed' AND tblcart.extra_id = tblextras.extra_id 
                                  $extra_query=mysql_query("SELECT * from tblstudents, tblcart, tblextras WHERE tblstudents.RollId = '$session_id' AND tblcart.RollId = '$session_id' AND tblcart.extra_id = tblextras.extra_id ")or die(mysql_error());

									while($extra2_row=mysql_fetch_array($extra_query)){
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
                                    </tr>

									<?php  }  ?>
                           
                                </tbody>
                            </table>

				</div>
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>