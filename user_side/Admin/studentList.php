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
                                        <th width="50">Id Pelajar</th>
                                        <th width="30">Nama Pelajar</th>
                                        <th width="10">Kelas</th>
                                        <th width="50">Jantina</th>
                                        <th width="10">Email</th> 
                                        <th width="10">Status</th>
                                        <th width="10">Action</th>                                
                                  
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  
                                  
                                  $extra_query=mysqli_query($dbcon,"SELECT * from tblstudents ORDER BY 'StudentName'") or die(mysqli_error($dbcon));

									while($extra2_row=mysqli_fetch_array($extra_query)){
									?>
									<tr>
                                    <td><?php echo $extra2_row['StudentId']; ?></td>
                                    <td><?php echo $extra2_row['StudentName']; ?></td>
                                    <td><?php echo $extra2_row['ClassId']; ?></td>
                                    <td><?php echo $extra2_row['Gender']; ?></td>
                                    <td><?php echo $extra2_row['StudentEmail']; ?></td>
									<td><?php echo $extra2_row['Status']; ?></td>												
									<td><form method="post" action="addFee.php<?php echo '?id='.$extra2_row['StudentId']; ?>"><input type="hidden" name="extra_id" value=<?php echo $extra2_row['StudentId']; ?>><input type="submit" value="Tambah Yuran" class="button"/></form></td>							
                                    </tr>

									<?php  }  ?>
                           
                                </tbody>
                            </table>

				</div>
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>