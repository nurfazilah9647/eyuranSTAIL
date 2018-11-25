<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php

$_SESSION['code'] = rand();
$code = $_SESSION['code'];

?>
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
			
				          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">

		<div class="box mb0" id="viewpextra">
			<div class="box-content-1">
				<div class="box-product-1" >
					<center>
					<?php
						// Included configuration file in our code.
						include('dbcon.php');?>

		<div class="box mb0" id="cart">
		
			<div class="box-content-1">
				<div class="box-product-1" >
					<?php
						
						include("dbcon.php");
						
						$sql = "SELECT COUNT(*) FROM tblcart WHERE RollId = '$session_id' AND status = 'Pending'";
						
						$query = (mysql_query($sql));
						
						$row = mysql_fetch_row($query);
						
						// Here we have the total row count
						$rows = $row[0];
						
						$totalquantity = 0;
						
						$subtotal = 0;
						
						$amount = 0;

						$totalamount = 0;
						
						$selectproducts = "SELECT * FROM tblcart , tblextras WHERE tblcart.RollId = '$session_id'  AND tblcart.status = 'Pending' AND tblextras.extra_id = tblcart.extra_id";
						
						$query = mysql_query($selectproducts);


						if($rows == 0)
						{
							echo "<script>alert('No Items In Cart')</script>";
							echo "<script>window.location.href='dasboard.php';</script>";
						}
						
						else
						{
							
							?>
							
			
				          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th width="40">CODE</th>
                                        <th width="50">NAME</th>
                                        <th width="150">DESCRIPTION</th>
                                        <th width="25">TYPE</th>
                                        <th width="40">PRICE</th>
                                        <th width="30">QTY</th>
                                        <th width="30">CHARGE</th>
                                        <th width="50">ADDED ON</th> 
                                        <th width="80">ACTION</th>                                 
                                  
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  
                                  
                                  $extra_query=mysql_query("SELECT * from tblcart JOIN tblextras WHERE tblcart.extra_id = tblextras.extra_id") or die(mysql_error());

									while($extra2_row=mysql_fetch_array($extra_query)){
									?>
									<tr>
                                    <td><a href = "view.php?id=<?php echo $extra2_row['extra_id']; ?>"><?php echo $extra2_row['extra_id']; ?></a> </td>
                                    <td><?php echo $extra2_row['extra_name']; ?></td>
                                    <td><?php echo $extra2_row['extra_desc']; ?></td>
									<td><?php echo $extra2_row['extra_type']; ?></td>
									<td>RM<?php echo $extra2_row['extra_price']; ?></td>
									<td><?php echo $extra2_row['qty']; ?></td>
										<?php $qty = $extra2_row['qty'] ; ?>
										<?php $price = $extra2_row['extra_price'] ; ?>
										<?php $amount = ($qty * $price); ?>

										<?php 
											$totalquantity = $totalquantity + $qty;
											$subtotal = $subtotal + $amount ; 
											$totalamount = $subtotal;
										?>										

									<td>RM<?php echo "$amount" ?></td>										
									<td><?php echo $extra2_row['added']; ?></td>
									<td><form method="post" action="remove.php"><input type="hidden" size="4" name="extra_id" value=" <?php echo $extra2_row['extra_id']; ?>" /><input type="submit" value="Remove" name="submit" /></form></td>							
                                    </tr>

									<?php  }  ?>
                           
                                </tbody>
                            </table>

				</div>
				
			</div>
							<?php		
									
							}
					?>
					
					<p></p>
					<table border="1" align="center" width="300px">
						<tr align="center">
							<td width="150px"><b>Total Quantity</b></td><td width="150px"><?php echo $totalquantity;?></td>
						</tr>
						<tr align="center">
							<td width="150px"><b>Total Items</b></td><td width="150px"><?php echo $rows;?></td>
						</tr>
						<tr align="center">
							<td><b>Total Amount</b></td><td><b><?php echo $totalamount;?></b></td>
						</tr>
					</table>
					<p></p>
					<?php
					 if(!$rows == 0)
					 {
					?>
					<p align="center"><input type="button" value="Checkout" onClick="javascript:location.href='checkout.php';"></p>
					<?php
					 }
					?>
				</div>
			</div>
		</div>

		<?php include("footer.php");?>
	
</div>
</body>
</html>