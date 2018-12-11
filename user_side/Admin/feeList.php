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
                    <?php
                        if (isset($_POST['delete'])){
                            $deleteId = $_POST['delete_id'];
                            $extra_query=mysqli_query($dbcon,"DELETE FROM tblfees WHERE feeId = '$deleteId' ") or die(mysqli_error($dbcon));
                        }
                    ?>
				</div>
				<div class="span10">
			
				          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th width="30">Id Yuran</th>
                                        <th width="50">Id Pelajar</th>
                                        <th width="10">Jumlah (RM)</th>
                                        <th width="50">Tarikh</th>
                                        <th width="10">Status</th>
                                        <th width="10">Action</th>                                
                                  
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  
                                  
                                  $extra_query=mysqli_query($dbcon,"SELECT * from tblfees ORDER BY feeId ") or die(mysqli_error($dbcon));

									while($extra2_row=mysqli_fetch_array($extra_query)){
									?>
									<tr>
                                    <td><?php echo $extra2_row['feeId']; ?></td>
                                    <td><?php echo $extra2_row['studentId']; ?></td>
                                    <td><?php echo $extra2_row['amount']; ?></td>
                                    <td><?php echo $extra2_row['feeDate']; ?></td>
                                    <td><?php echo $extra2_row['status']; ?></td>											
									<td><form method="post" action="viewResit.php<?php echo '?id='.$extra2_row['feeId'].'&location='.$extra2_row['resit']; ?>">
                                            <input type="hidden" name="extra_id" value=<?php echo $extra2_row['feeId']; ?>>
                                            <input <?php if ($extra2_row['status'] != 'Processing') echo " style='display: none';"; ?> type="submit" value="Semak Bayaran" class="button"/>
                                        </form>
                                        <form method="post">
                                            <input type="hidden" name="delete_id" value=<?php echo $extra2_row['feeId']; ?>>
                                            <input type="submit" name="delete" value="Delete Yuran" class="button"/>
                                        </form>
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