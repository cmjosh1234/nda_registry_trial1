<?php
        include('connect.php');	

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
        $id = $_GET['id'];

        // query
        $sql = "INSERT INTO incoming2021 (SUBJECT,DATE_RECEIEVED,REF,SENDER,TODEPT,RECEIVED_BY,DATE_OF_OUTGOING_LETTER,REF_NO,SENDING_DEPT,DATE_RECIEVED_AT_REGISTRY,RECIEVED_BY,TEL,DATE_RECIEVED,FILE_NAME,FILE_NO,BOX_NO,id) VALUES (:ent1,:ent2,:ent3,:ent4,:ent5,:ent6,:ent7,:ent8,:ent9,:ent10,:ent11,:ent12,:ent13,:ent14,:ent15,:ent16,:ent17)";
        $q = $db->prepare($sql);
        $q->execute(array(':ent1'=>$SUBJECT,':ent2'=>$DATE_RECEIEVED,':ent3'=>$REF,':ent4'=>$SENDER,':ent5'=>$TODEPT,':ent6'=>$RECEIVED_BY,':ent7'=>$DATE_OF_OUTGOING_LETTER,':ent8'=>$REF_NO,':ent9'=>$SENDING_DEPT,':ent10'=>$DATE_RECIEVED_AT_REGISTRY,':ent11'=>$RECIEVED_BY,':ent12'=>$TEL,':ent13'=>$DATE_RECIEVED,':ent14'=>$FILE_NAME,':ent15'=>$FILE_NO,':ent16'=>$BOX_NO,':ent17'=>$id));
        header("location: index.php");
?>