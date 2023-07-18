<?php
// configuration
include('connect.php');

// new data
$received1 = $_POST['received1'];
$ref = $_POST['ref'];
$sender = $_POST['sender'];
$sub = $_POST['sub'];
$to_dept = $_POST['to_dept'];
$received_by = $_POST['received_by'];
$out_letter = $_POST['out_letter'];
$refno = $_POST['refno'];
$sending_dept = $_POST['sending_dept'];
$rareg = $_POST['rareg'];
$received_by = $_POST['received_by'];
$tel_no = $_POST['tel_no'];
$received2 = $_POST['received2'];
$file_name = $_POST['file_name'];
$file_no = $_POST['file_no'];
$box_no = $_POST['box_no'];


// query
$sql = "UPDATE transaction 
        SET received1=?, ref=?, sender=?, sub=?, to_dept=?, received_by=?, out_letter=?, refno=?, sending_dept=?, rareg=?, received_by=?, tel_no=?, received2=?, file_name=?, file_no=?, box_no=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($received1,$ref,$sender,$sub,$to_dept,$received_by,$out_letter,$refno,$sending_dept,$rareg,$received_by,$tel_no,$received2,$file_name,$file_no,$box_no));
header("location: index.php");

?>