<?php
// configuration
include('../connect.php');

// new data
$LETTER_REF = $_POST['LETTER_REF'];
$ADDRESSED_TO = $_POST['ADDRESSED_TO'];
$SUBJECT = $_POST['SUBJECT'];
$DATE_OF_LETTER = $_POST['DATE_OF_LETTER'];
$DATE_RECIEVED_AT_REGISTRY = $_POST['DATE_RECIEVED_AT_REGISTRY'];
$RECIPIENT = $_POST['RECIPIENT'];
$DATE_DELIVERED = $_POST['DATE_DELIVERED'];
$FILE_NAME = $_POST['FILE_NAME'];
$FILE_NO = $_POST['FILE_NO'];
$BOX_NO = $_POST['BOX_NO'];
$id = $_POST['memids'];



// query
$sql = "UPDATE letters_without_reference_2021 
        SET LETTER_REF=?, ADDRESSED_TO=?, SUBJECT=?, DATE_OF_LETTER=?, DATE_RECIEVED_AT_REGISTRY=?, RECIPIENT=?, DATE_DELIVERED=?, FILE_NAME=?, FILE_NO=?, BOX_NO=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($LETTER_REF,$ADDRESSED_TO,$SUBJECT,$DATE_OF_LETTER,$DATE_RECIEVED_AT_REGISTRY,$RECIPIENT,$DATE_DELIVERED,$FILE_NAME,$FILE_NO,$BOX_NO,$id));
header("location: index.php");

?>