<?php

// configuration
include('connect.php');

// new data
$DATE_RECEIEVED = $_POST['DATE_RECEIEVED'];
$REF = $_POST['REF'];
$SENDER = $_POST['SENDER'];
$SUBJECT = $_POST['SUBJECT'];
$TODEPT = $_POST['TODEPT'];
$RECEIVED_BY = $_POST['RECEIVED_BY'];
$DATE_OF_OUTGOING_LETTER = $_POST['DATE_OF_OUTGOING_LETTER'];
$REF_NO = $_POST['REF_NO'];
$SENDING_DEPT = $_POST['SENDING_DEPT'];
$DATE_RECIEVED_AT_REGISTRY = $_POST['DATE_RECIEVED_AT_REGISTRY'];
$RECIEVED_BY = $_POST['RECIEVED_BY'];
$TEL = $_POST['TEL'];
$DATE_RECIEVED = $_POST['DATE_RECIEVED'];
$FILE_NAME = $_POST['FILE_NAME'];
$FILE_NO = $_POST['FILE_NO'];
$BOX_NO = $_POST['BOX_NO'];
 
// query
$sql = "UPDATE incoming2021 
        SET SUBJECT=?, DATE_RECEIEVED=?, REF=?, SENDER=?, TODEPT=?, RECEIVED_BY=?, DATE_OF_OUTGOING_LETTER=?, REF_NO=?, SENDING_DEPT=?, DATE_RECIEVED_AT_REGISTRY=?, RECIEVED_BY=?, TEL=?, DATE_RECIEVED=?, FILE_NAME=?, FILE_NO=?, BOX_NO=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($SUBJECT,$DATE_RECEIEVED,$REF,$SENDER,$TODEPT,$RECEIVED_BY,$DATE_OF_OUTGOING_LETTER,$REF_NO,$SENDING_DEPT,$DATE_RECIEVED_AT_REGISTRY,$RECIEVED_BY,$TEL,$DATE_RECIEVED,$FILE_NAME,$FILE_NO,$BOX_NO));
header("location: index.php");


?>