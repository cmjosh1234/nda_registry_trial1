<?php
// configuration
include('../connect.php');

// new data
$STAFF_NAME = $_POST['STAFF_NAME'];
$id = $_POST['memids'];
 
// query
$sql = "UPDATE staff 
        SET STAFF_NAME=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($STAFF_NAME,$id));
header("location: index.php");

?>