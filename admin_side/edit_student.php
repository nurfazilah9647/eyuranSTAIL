<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dasboard.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysqli_query($dbcon,"SELECT * from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId where RollId='$get_id'")or die(mysqli_error());
		$row=mysqli_fetch_array($query);
		
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Edit Pelajar</div>
			<p><a class="btn btn-info" href="students.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Kembali</a></p>
	<div class="addstudent">
	<div class="details">Sila Masukkan Maklumat</div>	
	<form class="form-horizontal" method="POST" action="update_students.php" enctype="multipart/form-data">
			<div class="control-group">
			<label class="control-label" for="inputEmail">I PelajarD :</label>
			<div class="controls">
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['RollId']; ?>" placeholder="Student No" required>
			<input type="text" id="rollid" name="rollid" value="<?php echo $row['RollId']; ?>" placeholder="Student No" readonly>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Nama Penuh :</label>
			<div class="controls">
			<input type="text" id="name" name="name" value="<?php echo $row['StudentName']; ?>" placeholder="Full Name" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Kata Laluan : </label>
			<div class="controls">
			<input type="text" id="password" name="password" value="<?php echo $row['pass']; ?>" placeholder="Password" readonly>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Email : </label>
			<div class="controls">
			<input type="text" id="studentemail" name="studentemail" value="<?php echo $row['StudentEmail']; ?>" placeholder="Email" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">jantina : </label>
			<div class="controls">
				<select name="gender" required>
					<?php 
						$query=mysql_query("SELECT * from tblstudents where RollId='$get_id'")or die(mysql_error());
						$row1=mysql_fetch_array($query);		
						?>					
							<option><?php echo $row1['Gender']; ?></option>
							<option>Male</option>
							<option>Female</option>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Kelas : </label>
			<div class="controls">
				<select name="class" id="class" required="required"> 
					<option value="<?php echo ($row['id']); ?>"><?php echo ($row['ClassName']); ?></option>;
					<?php
					$a=0;				
					$query = mysql_query("SELECT * from tblclasses")or die(mysql_error());
					while($row = mysql_fetch_array($query)){ 
					$a++;?>					
					
					?>					
									
					<?php } ?>
						}
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Status : </label>
			<div class="controls">
				<select name="status" required>
					<?php 
						$query=mysql_query("SELECT * from tblstudents where RollId='$get_id'")or die(mysql_error());
						$row1=mysql_fetch_array($query);		
						?>					
							<option><?php echo $row1['Status']; ?></option>
							<option>Active</option>
							<option>Inactive</option>
				</select>
			</div>
		</div>								
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Kemaskini</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>