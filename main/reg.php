<?php
include('connect.php');	

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
$sql = "INSERT INTO transaction (received1,ref,sender,sub,to_dept,received_by,out_letter,refno,sending_dept,rareg,received_by,tel_no,received2,file_name,file_no,box_no) VALUES (:ent1,:ent2,:ent3,:ent4,:ent5,:ent6,:ent7,:ent8,:ent9,:ent10,:ent11,:ent12,:ent13,:ent14,:ent15,:ent16)";
$q = $db->prepare($sql);
$q->execute(array(':ent1'=>$received1,':ent2'=>$ref,':ent3'=>$sender,':ent4'=>$sub,':ent5'=>$to_dept,':ent6'=>$received_by,':ent7'=>$out_letter,':ent8'=>$refno,':ent9'=>$sending_dept,':ent10'=>$rareg,':ent11'=>$received_by,':ent12'=>$tel_no,':ent13'=>$received2,':ent15'=>$file_name,':ent16'=>$box_no));
header("location: index.php");


?>