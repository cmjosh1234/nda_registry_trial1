<?php
include('../connect.php');	

$STAFF_NAME = $_POST['STAFF_NAME'];
$TELEPHONE_NUMBER = $_POST['TELEPHONE_NUMBER'];
$DEPARTMENT = $_POST['DEPARTMENT'];

// query
$sql = "INSERT INTO staff (STAFF_NAME,TELEPHONE_NUMBER,DEPARTMENT) VALUES (:ent1,:ent2,:ent3)";
$q = $db->prepare($sql);
$q->execute(array(':ent1'=>$STAFF_NAME , ':ent2' => $TELEPHONE_NUMBER, ':ent3' => $DEPARTMENT));
header("location: index.php");
?>