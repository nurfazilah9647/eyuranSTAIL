<?php
 include('dbcon.php');

 	if (isset($_POST['Delete'])){
	$id = $_POST['id'];
	$get_id = $_POST['get'];

 	mysql_query("DELETE from tblresult where id='$id'") or die(mysql_error()); 
?>

<script>
  window.location = "view_grade.php<?php echo '?id='.$get_id;  ?>";   
</script>
<?php } ?>