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
LETTER REF<br>
<input type="text" name="LETTER_REF" value="<?php echo $rows['LETTER_REF']; ?>" /><br><br>
ADDRESSED TO<br>
<input type="text" name="ADDRESSED_TO" value="<?php echo $rows['ADDRESSED_TO']; ?>" /><br><br>
SUBJECT<br>
<input type="text" name="SUBJECT" value="<?php echo $rows['SUBJECT']; ?>" /><br><br>
DATE OF LETTER<br>
<input type="date" name="DATE_OF_LETTER" value="<?php echo $rows['DATE_OF_LETTER']; ?>" /><br><br>
DATE RECIEVED AT REGISTRY<br>
<input type="date" name="DATE_RECIEVED_AT_REGISTRY" value="<?php echo $rows['DATE_RECIEVED_AT_REGISTRY']; ?>" /><br><br>
RECIPIENT<br>
<input type="text" name="RECIPIENT" value="<?php echo $rows['RECIPIENT']; ?>" /><br><br>
DATE DELIVERED<br>
<input type="date" name="DATE_DELIVERED" value="<?php echo $rows['DATE_DELIVERED']; ?>" /><br><br>
FILE NAME<br>
<input type="text" name="FILE_NAME" value="<?php echo $rows['FILE_NAME']; ?>" /><br><br>
FILE NUMBER<br>
<input type="text" name="FILE_NO" value="<?php echo $rows['FILE_NO']; ?>" /><br><br>
BOX NUMBER<br>
<input type="text" name="BOX_NO" value="<?php echo $rows['BOX_NO']; ?>" /><br><br>
<input type="submit" value="Save" />
</form>
<?php
	}
?>