<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
$query=mysqli_query($dbcon, "SELECT * from tblstudents where RollId='$session_id'")or die(mysql_error());
$row=mysqli_fetch_array($query);
 ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>
				<div class="span2">
					<?php include('user_sidebar.php'); ?>
				</div>
				<div class="span10">
			
				          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th width="50">Code</th>
                                        <th width="30">Name</th>
                                        <th width="300">Description</th>
                                        <th width="30">Type</th>
                                        <th width="50">Price</th> 
                                        <th width="80">Action</th>                                 
                                  
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  
                                  
                                  $extra_query=mysqli_query($dbcon,"SELECT * from tblextras ORDER BY 'extra_type'") or die(mysql_error());

									while($extra2_row=mysqli_fetch_array($extra_query)){
									?>
									<tr>
                                    <td><?php echo $extra2_row['extra_id']; ?></td> 
                                    <td><?php echo $extra2_row['extra_name']; ?></td>
                                    <td><?php echo $extra2_row['extra_desc']; ?></td>
                                    <td><?php echo $extra2_row['extra_type']; ?></td>
									<td><?php echo $extra2_row['extra_price']; ?></td>												
									<td><form method="post" action="view.php<?php echo '?id='.$extra2_row['extra_id']; ?>"><input type="hidden" name="extra_id" value=<?php echo $extra2_row['extra_id']; ?>><input type="submit" value="More Info" class="button"/></form></td>							
                                    </tr>

									<?php  }  ?>
                           
                                </tbody>
                            </table>

				</div>
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>