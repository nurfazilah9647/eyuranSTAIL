<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
$query=mysqli_query($dbcon,"SELECT * from tblstudents where RollId='$session_id'")or die(mysql_error());
$row=mysqli_fetch_array($query);
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
                                        <th width="50">No Transaksi</th>
                                        <th width="30">ID Pelajar</th>
                                        <th width="200">Nama Pelajar</th>
                                        <th width="30">Jenis Yuran</th>
                                        <th width="50">Jumlah</th> 
                                        <th width="20">Resit</th>
                                        <th width="20">Status</th>
                                        <th width="80">Tarikh Bayaran</th>                                 
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  
                                  //SELECT * from tblstudents, tblcart, tblextras WHERE tblstudents.RollId = '$session_id' AND tblcart.RollId = '$session_id' AND tblcart.status ='Paid' AND tblcart.extra_id = tblextras.extra_id OR tblcart.status ='Completed' AND tblcart.extra_id = tblextras.extra_id 
                                  $extra_query=mysqli_query($dbcon,"SELECT * from tblstudents, tblcart, tblextras WHERE tblstudents.RollId = '$session_id' AND tblcart.RollId = '$session_id' AND tblcart.extra_id = tblextras.extra_id ")or die(mysqli_error());

									while($extra2_row=mysqli_fetch_array($extra_query)){
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