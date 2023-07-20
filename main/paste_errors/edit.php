<?php

// configuration
include('../connect.php');

// new data
$Field0 = $_POST['Field0'];
$id = $_POST['memids'];
 
// query
$sql = "UPDATE paste_errors 
        SET Field0=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($Field0,$id));
header("location: index.php");

?>