<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM letters_without_reference_2021 WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>