<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM incoming2021 WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $rows = $result->fetch(); $i++){
?>
<form action="edit.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
RECEIVED<br>
<input type="date" name="DATE_RECEIEVED" value="<?php echo $rows['DATE_RECEIEVED']; ?>" /><br><br>
REF<br>
<input type="text" name="REF" value="<?php echo $rows['REF']; ?>" /><br><br>
SENDER<br>
<input type="text" name="SENDER" value="<?php echo $rows['SENDER']; ?>" /><br><br>
SUB<br>
<input type="text" name="SUBJECT" value="<?php echo $rows['SUBJECT']; ?>" /><br><br>
TO (DEPT)<br>
<input type="text" name="TODEPT" value="<?php echo $rows['TODEPT']; ?>" /><br><br>
RECEIVED_BY<br>
<input type="text" name="RECEIVED_BY" value="<?php echo $rows['RECEIVED_BY']; ?>" /><br><br>
OUTGOING LETTER<br>
<input type="text" name="DATE_OF_OUTGOING_LETTER" value="<?php echo $rows['DATE_OF_OUTGOING_LETTER']; ?>" /><br><br>
REF NO<br>
<input type="text" name="REF_NO" value="<?php echo $rows['REF_NO']; ?>" /><br><br>
SENDING DEPT<br>
<input type="text" name="SENDING_DEPT" value="<?php echo $rows['SENDING_DEPT']; ?>" /><br><br>
RECEIVED AT REGISTRY<br>
<input type="text" name="DATE_RECIEVED_AT_REGISTRY" value="<?php echo $rows['DATE_RECIEVED_AT_REGISTRY']; ?>" /><br><br>
RECEIVED_BY<br>
<input type="text" name="RECIEVED_BY" value="<?php echo $rows['RECIEVED_BY']; ?>" /><br><br>
TEL<br>
<input type="text" name="TEL" value="<?php echo $rows['TEL']; ?>" /><br><br>
RECEIVED<br>
<input type="text" name="DATE_RECIEVED" value="<?php echo $rows['DATE_RECIEVED']; ?>" /><br><br>
FILE NAME<br>
<input type="text" name="FILE_NAME" value="<?php echo $rows['FILE_NAME']; ?>" /><br><br>
FILE NUMBER<br>
<input type="text" name="FILE_NO" value="<?php echo $rows['FILE_NO']; ?>" /><br><br>
BOX_NO<br>
<input type="text" name="BOX_NO" value="<?php echo $rows['BOX_NO']; ?>" /><br><br>
<input type="submit" value="Save" />
</form>
<?php
	}
?>