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
						
						include("dbcon.php"); ?>

		<div class="box mb0" id="checkout">
			<div class="box-content-1">
				<div class="box-product-1" >
					<?php

						include("dbcon.php");
						
						$sql = "SELECT COUNT(*) FROM tblcart WHERE RollId = $session_id AND status = 'Pending'";
						
						$query = (mysql_query($sql));
						
						$row = mysql_fetch_row($query);
						
						$rows = $row[0];
						
						$countrows = $rows;
						
						$totalquantity = 0;
						
						$subtotal = 0;
						
						$totalamount = 0;
												
						$selectproducts = "SELECT * FROM tblcart , tblextras, tblstudents WHERE tblcart.RollId = '$session_id' AND tblstudents.RollId = '$session_id' AND tblcart.status = 'Pending' AND tblextras.extra_id = tblcart.extra_id";

						$query = mysql_query($selectproducts);
						
						if($rows == 0)
						{
							echo "<script>alert('Buy an Item First!')</script>";
							echo "<script>window.location.href='index-1.php';</script>";
						}
						
						else
						{
							
							echo "<center><b><u>ITEMS IN YOUR CART</u></b></center><br />";
							echo "<table align='center' border='1' cellspacing='1' cellpadding='0' width='50%'>
									<th align='center' bgcolor='e6e6e6'>CODE </th>
									<th align='center' bgcolor='e6e6e6''> NAME</th>
									<th align='center' bgcolor='e6e6e6''>QUANTITY</th>
									<th align='center' bgcolor='e6e6e6''>PRICE</th>
									<th align='center' bgcolor='e6e6e6''>AMOUNT</th>";
							
							for($loop = 0; $loop < $countrows; $loop++)
							{
								
								while($row = mysql_fetch_array($query))
								{
									$extra_id = $row['extra_id'];
									$qty = $row['qty'];
									$RollId = $row['RollId'];
									$status = $row['status'];
									$added = $row['added'];
									$checked = $row['checkedon'];
									$trans = $row['trans'];

									$extra_name = $row['extra_name'];
									$price = $row['extra_price'];
									$width="150px";
									$height="150px";
									$amount = ($qty * $price);
									
									$totalquantity = $totalquantity + $qty;
									$subtotal = $subtotal + $amount ; 
									$totalamount = $subtotal;
									
									$list ="<tr align='center'><td>" . $extra_id . "</td><td>" . $extra_name . "</td><td>" . $qty . "</td>";
									
									$list .= "<td>" . $price . "</td><td>" . $amount . "</tr>";

									echo $list;	
								}
							}
							echo "</table></center><br />";
						}
					?>
					<script type="text/javascript">
					<!--  Begin

					function resetform()
					{
					document.forms[0].elements[6]=="";
					}

					function submitForms()
					{
					if (isCard())
					if (confirm("\n You are about to submit this form. \n\nPress Ok to submit. Cancel to abort."))
					{
					alert(document.forms[0].elements[2].value + " " + document.forms[0].elements[1].value +"\n\n\nYour Checkout form has been sent successfully. \n\n\nThank you!");
					return true;
					}
					else
					{
					alert("You have chosen to abort the checkout.");
					return false;
					}
					else 
					return false;
					}

					}
					}
					}
					// End -->
					</script>

						<table border="1" align="center" width="300px">
							<tr align="center">
								<td width="150px"><b>Total Quantity</b></td><td width="150px"><?php echo $totalquantity;?></td>
							</tr>
							<tr align="center">
								<td width="150px"><b>Total Items</b></td><td width="150px"><?php echo $rows;?></td>
							</tr>
							<tr align="center">
								<td><b>Grand Total</b></td><td><b><?php echo $subtotal;?></b></td>
							</tr>
						</table>
						
						<br />

					<table border="0" cellpadding="1" cellspacing="0" width="80%" align="center">
					  <tr>
						<td colspan="5" height="96">
							<form name="formCheckout" method="post" action="confirmcheckout.php" onSubmit="return submitForms()">
							<table width="400" align="center" border="0">
                                                            
                                                        <?php
                                                            $_SESSION['amount'] = $subtotal; ?>
							<tr>
								<td bgColor="c6d3ce">
								 	<table width="400" border="0">
								  
									</table>
								</td>
							</tr>
							</table>
							<br>
							<table width="400" align="center" border="0">
							  <tr>
								<td align="center" width="200"><input type="submit" value="Submit"></td>
								<td align="center" width="200"><input type="reset" name="reset" value="Reset Form" onClick="return confirm('Are you sure you want to reset the current information?');"></td>
							  </tr>
							</table>
						  </form>
						</td>
					  </tr>
					</table>
				</div>
			</div>
		</div>
		
		<?php include("footer.php");?>	
</div>
</body>
</html>