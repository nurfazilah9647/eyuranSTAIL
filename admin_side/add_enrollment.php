<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_subject.php'); ?>
<?php $con=mysqli_connect("localhost","root","","srms"); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Tambah Pendaftaran Baharu</div>
			<p><a href="students.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Kembali</a></p>
	<div class="addstudent">
	<div class="details"> Sila Masukkan Maklumat dibawah</div>		
	<form class="form-horizontal" method="POST" action="enrolll_save.php" enctype="multipart/form-data">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Nama Kelas : </label>
					<div class="controls">
						<select name="class" id="class" required="required"> 
							<option value="">Pilih Kelas</option>
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
				<label class="control-label" for="inputEmail">Nama Yuran : </label>
					<div class="controls">
						<select name="subject" id="subject" required="required"> 
							<option value="">Jenis Yuran</option>
								<?php
								$a1=0;				
								$query1 = mysql_query("SELECT * from tblsubjects")or die(mysql_error());
								while($row1 = mysql_fetch_array($query1)){ 
								$a1++;?>					
								<option value="<?php echo ($row1['id']); ?>"><?php echo ($row1['SubjectName']); ?></option>;
								?>					
								<?php } ?>
								}
						</select>

					</div>
			</div>

		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Simpan</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>