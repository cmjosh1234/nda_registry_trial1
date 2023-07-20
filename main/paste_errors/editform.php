<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM paste_errors WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $rows = $result->fetch(); $i++){
?>
<form action="edit.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
Field0<br>
<input type="text" name="Field0" value="<?php echo $rows['Field0']; ?>" /><br><br>
<input type="submit" value="Save" />
</form>
<?php
	}
?>