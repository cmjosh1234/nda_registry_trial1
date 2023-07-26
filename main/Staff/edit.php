<?php
// configuration
include('../connect.php');

// new data
$STAFF_NAME = $_POST['STAFF_NAME'];
$TELEPHONE_NUMBER = $_POST['TELEPHONE_NUMBER'];
$id = $_POST['memids'];
 
// query
$sql = "UPDATE staff 
        SET STAFF_NAME=?, TELEPHONE_NUMBER=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($STAFF_NAME,$TELEPHONE_NUMBER,$id));
header("location: index.php");
?>