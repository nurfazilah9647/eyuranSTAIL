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
			
				          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
		
		<div class="box mb0" id="viewpextra">
			<div class="box-content-1">
				<div class="box-product-1" >
					<center>
					<?php
						// Included configuration file in our code.
						include('dbcon.php');

						$extra_id = $_GET['id'];
						echo "PRODUCT DETAILS";?>

				          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th width="50">Code</th>
                                        <th width="30">Name</th>
                                        <th width="300">Description</th>
                                        <th width="30">Type</th>
                                        <th width="50">Price</th>                                   
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  
                                  
                                  $extra_query=mysql_query("SELECT * from tblextras WHERE extra_id = '$extra_id' ") or die(mysql_error());

									while($extra2_row=mysql_fetch_array($extra_query)){
									?>
									<tr>
                                    <td><?php echo $extra2_row['extra_id']; ?></td> 
                                    <td><?php echo $extra2_row['extra_name']; ?></td>
                                    <td><?php echo $extra2_row['extra_desc']; ?></td>
                                    <td><?php echo $extra2_row['extra_type']; ?></td>
									<td><?php echo $extra2_row['extra_price']; ?></td>												
                                    </tr>

									<?php  }  ?>
                           
                                </tbody>
                            </table>
						<br />
						<script type="text/javascript">
						function checkIt(evt)
						{
						evt = (evt) ? evt : window.event;
						var charCode = (evt.charCode) ? evt.charCode :
						((evt.which) ? evt.which : evt.keyCode);

						if (charCode > 31 && (charCode < 48 || charCode > 57))
						{
						status = "This field accepts numbers only.";
						return false;
						}
						status = "";
						return true;
						}
						</script>

						<script type="text/javascript">
						<!--  Begin
						function submitForms()
						{
						if (isCart())
						if (confirm("\n You are about to add this product to your cart. \n\nPress Ok to submit. Cancel to abort."))
						{
						return true;
						}
						else
						{
						alert("Product not added to cart");
						return false;
						}
						else 
						return false;
						}

						function isCart()
						{
						T = document.forms[0].elements[0].value;
						if(T == "")
						{
						alert("Quantity cannot be blank")
						document.forms[0].elements[0].focus();
						return false;                
						}

						else
						{
						if (T < 1)
						{
						alert("Quantity must not be less than 1")
						document.forms[0].elements[0].focus();
						return false;
						}

						}

						// End -->
						</script>
						<form action="processcheckout.php" method="post" onSubmit="return submitForms()" "returninPosInteger()">
						
						Enter Quantity:<input type="text" name="txtQty" size="8" onkeypress="return checkIt(event)">
						<input type="hidden" name="RollId" value="<?php echo $session_id;?>">
						<input type="hidden" name="extra_id" value="<?php echo $extra_id;?>">
						<input type="submit" value="Proceed">
						</form>
					</center>
				</div>
			</div>
		</div>
		<!--Random Featured Product End-->
	<!--Footer Part Start-->
<?php include('footer.php') ?>
	<!--Footer Part End-->
</div>
<!-- Main Div Tag End-->

</body>
</html>