<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_students.php'); ?>
<?php $con=mysqli_connect("localhost","root","","eyuran"); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Add Student</div>
			<p><a href="students.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>		
	<form class="form-horizontal" method="POST" action="student_save.php" enctype="multipart/form-data">
			<div class="control-group">
			<label class="control-label" for="inputEmail">Student ID:</label>
			<div class="controls">
			<input type="text" id="rollid" name="rollid" placeholder="Student ID" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Full Name:</label>
			<div class="controls">
			<input type="text" id="name" name="name" placeholder="Full Name" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Gender : </label>
			<div class="controls">
				<select name="gender" placeholder="Gender" required>
							<option>Male</option>
							<option>Female</option>
				</select>
			</div>
		</div>		
		<div class="control-group">
			<label class="control-label" for="inputEmail">Email:</label>
			<div class="controls">
			<input type="text" id="emailid" name="emailid" placeholder="Email" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="date">Date Of Birth:</label>
			<div class="controls">
			<input type="date" name="dob" id="dob">
			</div>
		</div>		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Class</label>
			<div class="controls">
				<select name="class" id="class" required="required"> 
					<option value="">Select Class</option>
					<?php
					$a=0;				
					$query = mysql_query("SELECT * from tblclasses")or die(mysql_error());
					while($row = mysql_fetch_array($query)){ 
					$a++;?>					
					<option value="<?php echo ($row['id']); ?>"><?php echo ($row['ClassName']); ?></option>;
					?>					
									
					<?php } ?>
						}
				</select>

			</div>
		</div>

		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>