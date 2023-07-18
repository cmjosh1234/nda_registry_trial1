//Add new records to database
<form action="reg.php" method="POST">
RECEIVED<br>
<input type="text" name="rdate" /><br><br>
REF<br>
<input type="text" name="ref" /><br><br>
SENDER<br>
<input type="text" name="sender" /><br><br>
SUB<br>
<input type="text" name="sub" /><br><br>
TO (DEPT)<br>
<input type="text" name="to_dept" /><br><br>
RECEIVED_BY<br>
<input type="text" name="received_by" /><br><br>
OUTGOING LETTER<br>
<input type="text" name="out_letter" /><br><br>
REF NO<br>
<input type="text" name="refno" /><br><br>
SENDING DEPT<br>
<input type="text" name="sending_dept" /><br><br>
RECEIVED AT REGISTRY<br>
<input type="text" name="rareg" /><br><br>
RECEIVED_BY
Document Type<br>
<select name="doc_type" class="ed">
	<?php
	include('connect.php');		
		$result = $db->prepare("SELECT * FROM doc_type ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
		echo '<option value="'.$row[name].'">'.$row[name].'</option>';
		}
	?>
</select><br /><br>
Description<br>
<textarea name="desc"></textarea><br><br>
Office<br>
<select name="office" class="ed">
	<?php
	include('connect.php');		
		$result = $db->prepare("SELECT * FROM offices ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
		echo '<option value="'.$row[name].'">'.$row[name].'</option>';
		}
	?>
</select><br /><br>
Status<br>
<input type="text" name="status" /><br><br>
Forwarded To<br>
<input type="text" name="ft" /><br><br>
<input type="submit" value="Save" />
</form>