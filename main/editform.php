<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM transaction WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $rows = $result->fetch(); $i++){
?>
<form action="edit.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
RECEIVED<br>
<input type="text" name="receive1" value="<?php echo $rows['receive1']; ?>" /><br><br>
REF<br>
<input type="text" name="ref" value="<?php echo $rows['ref']; ?>" /><br><br>
SENDER<br>
<input type="text" name="sender" value="<?php echo $rows['sender']; ?>" /><br><br>
SUB<br>
<input type="text" name="sub" value="<?php echo $rows['sub']; ?>" /><br><br>
TO (DEPT)<br>
<input type="text" name="to_dept" value="<?php echo $rows['to_dept']; ?>" /><br><br>
RECEIVED_BY<br>
<input type="text" name="received_by" value="<?php echo $rows['received_by']; ?>" /><br><br>
OUTGOING LETTER<br>
<input type="text" name="out_letter" value="<?php echo $rows['out_letter']; ?>" /><br><br>
REF NO<br>
<input type="text" name="refno" value="<?php echo $rows['refno']; ?>" /><br><br>
SENDING DEPT<br>
<input type="text" name="sending_dept" value="<?php echo $rows['sending_dept']; ?>" /><br><br>
RECEIVED AT REGISTRY<br>
<input type="text" name="rareg" value="<?php echo $rows['rareg']; ?>" /><br><br>
RECEIVED_BY<br>
<input type="text" name="received_by" value="<?php echo $rows['received_by']; ?>" /><br><br>
TEL<br>
<input type="text" name="tel_no" value="<?php echo $rows['tel_no']; ?>" /><br><br>
RECEIVED<br>
<input type="text" name="received2" value="<?php echo $rows['received2']; ?>" /><br><br>
FILE NAME<br>
<input type="text" name="file_name" value="<?php echo $rows['file_name']; ?>" /><br><br>
FILE NUMBER<br>
<input type="text" name="file_no" value="<?php echo $rows['file_no']; ?>" /><br><br>
BOX_NO<br>
<input type="text" name="box_no" value="<?php echo $rows['box_no']; ?>" /><br><br>
</form>
<?php
	}
?>