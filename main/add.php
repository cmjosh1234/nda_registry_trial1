<style>
	.add-form{
		background-color: #F0F7E1;
		padding: 0px 2px 0px 2px;
		margin: 0.5px;
		height: 50%;
	}
</style>
<div class="add-form">
	<p><strong>ENTER NEW RECORD</strong></p>
	<form action="reg.php" method="POST">
	DATE RECEIVED<br>
	<input type="date" name="DATE_RECEIEVED" /><br><br>
	REF<br>
	<input type="text" name="REF" /><br><br>
	SENDER<br>
	<input type="text" name="SENDER" /><br><br>
	SUBJECT<br>
	<input type="text" name="SUBJECT" /><br><br>
	TO (DEPT)<br>
	<select name="TODEPT" class="ed">
		<?php
		include('connect.php');		
			$result = $db->prepare("SELECT DISTINCT DEPARTMENT FROM staff");
			$result->execute();
			for($i=0; $row = $result->fetch(); $i++){
			echo '<option value="'.$row['DEPARTMENT'].'">'.$row['DEPARTMENT'].'</option>';
			}//Closes drop down box
		?>
	</select><br /><br>
	RECEIVED BY<br>
	<select name="RECEIVED_BY" class="ed">
		<?php
		include('connect.php');		
			$result = $db->prepare("SELECT DISTINCT STAFF_NAME FROM staff");
			$result->execute();
			for($i=0; $row = $result->fetch(); $i++){
			echo '<option value="'.$row['STAFF_NAME'].'">'.$row['STAFF_NAME'].'</option>';
			}//Closes drop down box
		?>
	</select><br /><br>

	OUTGOING LETTER<br>
	<input type="date" name="DATE_OF_OUTGOING_LETTER" /><br><br>
	REF NO<br>
	<input type="text" name="REF_NO" /><br><br>
	SENDING DEPT<br>
	<select name="SENDING_DEPT" class="ed">
		<?php
		include('connect.php');		
			$result = $db->prepare("SELECT DISTINCT DEPARTMENT FROM staff");
			$result->execute();
			for($i=0; $row = $result->fetch(); $i++){
			echo '<option value="'.$row['DEPARTMENT'].'">'.$row['DEPARTMENT'].'</option>';
			}//Closes drop down box
		?>
	</select><br /><br>

	DATE RECEIVED AT REGISTRY<br>
	<input type="date" name="DATE_RECIEVED_AT_REGISTRY" /><br><br>
	RECEIVED BY<br>
	<!-- <select name="RECIEVED_BY" class="ed">
		<?php
		/*include('connect.php');		
			$result = $db->prepare("SELECT * FROM staff");
			$result->execute();
			for($i=0; $row = $result->fetch(); $i++){
			echo '<option value="'.$row['STAFF_NAME'].'">'.$row['STAFF_NAME'].'</option>';
			}//Closes drop down box*/
		?>
	</select><br /><br> -->
	<input type="text" name="RECIEVED_BY" /><br><br>

	TEL<br>
	<input type="text" name="TEL" /><br><br>
	RECEIVED DATE<br>
	<input type="date" name="DATE_RECIEVED" /><br><br>
	FILE NAME<br>
	<input type="text" name="FILE_NAME" /><br><br>
	FILE NUMBER<br>
	<input type="text" name="FILE_NO" /><br><br>
	BOX NO<br>
	<input type="text" name="BOX_NO" /><br><br>
	<input type="submit" value="Save" />
	</form>
</div>