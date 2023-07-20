<?php
include('connect.php');	

$Field0 = $_POST['Field0'];

// query
$sql = "INSERT INTO paste_errors (Field0) VALUES (:ent1)";
$q = $db->prepare($sql);
$q->execute(array(':ent1'=>$Field0));
header("location: index.php");


?>