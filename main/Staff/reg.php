<?php
include('../connect.php');	

$STAFF_NAME = $_POST['STAFF_NAME'];

// query
$sql = "INSERT INTO staff (STAFF_NAME) VALUES (:ent1)";
$q = $db->prepare($sql);
$q->execute(array(':ent1'=>$STAFF_NAME));
header("location: index.php");
?>