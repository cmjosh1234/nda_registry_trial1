<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM staff WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $rows = $result->fetch(); $i++){
?>
<form action="edit.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
STAFF NAME<br>
<input type="text" name="STAFF_NAME" value="<?php echo $rows['STAFF_NAME']; ?>" /><br><br>
TELEPHONE NUMBER<br>
<input type="text" name="TELEPHONE_NUMBER" value="<?php echo $rows['TELEPHONE_NUMBER']; ?>" /><br><br>
DEPARTMENT<br>
<input type="text" name="DEPARTMENT" value="<?php echo $rows['DEPARTMENT']; ?>" /><br><br>
<input type="submit" value="Save" />
</form>
<?php
	}
?>