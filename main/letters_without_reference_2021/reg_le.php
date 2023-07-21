<?php
include('../connect.php');	

$LETTER_REF = $_POST['LETTER_REF'];
$ADDRESSED_TO = $_POST['ADDRESSED_TO'];
$SUBJECT = $_POST['SUBJECT'];
$DATE_OF_LETTER = $_POST['DATE_OF_LETTER'];
$DATE_RECEIEVED_AT_REGISTRY = $_POST['DATE_RECEIEVED_AT_REGISTRY'];
$RECIPIENT = $_POST['RECIPIENT'];
$DATE_DELIVERED = $_POST['DATE_DELIVERED'];
$FILE_NAME = $_POST['FILE_NAME'];
$FILE_NO = $_POST['FILE_NO'];
$BOX_NO = $_POST['BOX_NO'];

// query
$sql = "INSERT INTO letters_without_reference (LETTER_REF,ADDRESSED_TO,SUBJECT,DATE_OF_LETTER,DATE_RECEIEVED_AT_REGISTRY,RECIPIENT,DATE_DELIVERED,FILE_NAME,FILE_NO,BOX_NO) VALUES (:ent1,:ent2,:ent3,:ent4,:ent5,:ent6,:ent7,:ent8,:ent9,:ent10)";
$q = $db->prepare($sql);
$q->execute(array(':ent1'=>$LETTER_REF,':ent2'=>$ADDRESSED_TO,':ent3'=>$SUBJECT,':ent4'=>$DATE_OF_LETTER,':ent5'=>$DATE_RECEIEVED_AT_REGISTRY,':ent6'=>$RECIPIENT,':ent7'=>$DATE_DELIVERED,':ent8'=>$FILE_NAME,':ent9'=>$FILE_NO,':ent10'=>$BOX_NO));
header("location: index.php");

