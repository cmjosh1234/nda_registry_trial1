<?php
include('../connect.php');	

$STAFF_NAME = $_POST['STAFF_NAME'];
$TELEPHONE_NUMBER = $_POST['TELEPHONE_NUMBER'];

// query
$sql = "INSERT INTO staff (STAFF_NAME,TELEPHONE_NUMBER) VALUES (:ent1,:ent2)";
$q = $db->prepare($sql);
$q->execute(array(':ent1'=>$STAFF_NAME , ':ent2' => $TELEPHONE_NUMBER));
header("location: index.php");
?>