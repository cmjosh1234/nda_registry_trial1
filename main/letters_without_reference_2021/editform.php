<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM letters_without_reference_2021 WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $rows = $result->fetch(); $i++){
?>
<form action="edit.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
LETTER_REF<br>
<input type="text" name="LETTER REF" value="<?php echo $rows['LETTER_REF']; ?>" /><br><br>
ADDRESSED_TO<br>
<input type="text" name="ADDRESSED TO" value="<?php echo $rows['ADDRESSED_TO']; ?>" /><br><br>
SUBJECT<br>
<input type="text" name="SUBJECT" value="<?php echo $rows['SUBJECT']; ?>" /><br><br>
DATE_OF_LETTER<br>
<input type="text" name="DATE OF LETTER" value="<?php echo $rows['DATE_OF_LETTER']; ?>" /><br><br>
DATE_RECIEVED_AT_REGISTRY<br>
<input type="text" name="DATE RECIEVED AT REGISTRY" value="<?php echo $rows['DATE_RECIEVED_AT_REGISTRY']; ?>" /><br><br>
RECIPIENT<br>
<input type="text" name="RECIPIENT" value="<?php echo $rows['RECIPIENT']; ?>" /><br><br>
DATE_DELIVERED<br>
<input type="text" name="DATE DELIVERED" value="<?php echo $rows['DATE_DELIVERED']; ?>" /><br><br>
FILE NAME<br>
<input type="text" name="FILE_NAME" value="<?php echo $rows['FILE_NAME']; ?>" /><br><br>
FILE NO<br>
<<<<<<< HEAD
<input type="text" name="FILE NO" value="<?php echo $rows['FILE NO']; ?>" /><br><br>
RECEIVED AT REGISTRY<br>
<input type="text" name="DATE_RECIEVED_AT_REGISTRY" value="<?php echo $rows['DATE_RECIEVED_AT_REGISTRY']; ?>" /><br><br>
=======
<input type="text" name="FILE_NO" value="<?php echo $rows['FILE_NO']; ?>" /><br><br>
>>>>>>> e7ec96c5150bed11b2d515139171dc58165fc89e
BOX_NO<br>
<input type="text" name="BOX NO" value="<?php echo $rows['BOX_NO']; ?>" /><br><br>
<input type="submit" value="Save" />
</form>
<?php
	}
?>