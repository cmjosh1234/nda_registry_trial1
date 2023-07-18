<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<!--sa poip up-->
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<div id="log">
INCOMING 2021 | <a href="letters_without_reference_2021.php">LETTERS WITHOUT REFERENCE 2021</a> | <a href="paste_errors.php">PASTE ERRORS</a> | <a href="../index.php">Logout</a>
</div>
<div id="formdesign">
<input type="text" name="filter" value="" id="filter" placeholder="Search Transaction..." autocomplete="off" />
<a rel="facebox" href="add.php" id="add">ADD RECORD</a>
</div>
<table cellspacing="0" cellpadding="2" id="resultTable">
<thead>
	<tr>
		<th width="5%"> RECEIVED</th>
		<th width="7%"> REF</th>
		<th width="10%"> SENDER </th>
		<th width="10%"> SUB </th>
		<th width="23%"> TO(DEPT) </th>
		<th width="10%"> RECEIVED BY </th>
		<th width="5%"> OUTGOING LETTER </th>
		<th width="10%"> REF NO </th>
		<th width="10%"> SENDING (DEPT) </th>
		<th width="10%"> RECEIVED AT REGISTRY </th>
		<th width="10%"> RECEIVED BY </th>
		<th width="10%"> TEL </th>
		<th width="10%"> RECEIVED </th>
		<th width="10%"> FILE NAME </th>
		<th width="10%"> FILE NO </th>
		<th width="10%"> BOX NO </th>
	</tr>
</thead>
<tbody>
	<?php
		include('connect.php');		
		$result = $db->prepare("SELECT * FROM transaction ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="record">
		<td><?php echo $row['receive1']; ?></td>
		<td><?php echo $row['ref']; ?></td>
		<td><?php echo $row['sender']; ?></td>
		<td><?php echo $row['sub']; ?></td>
		<td><?php echo $row['to_dept']; ?></td>
		<td><?php echo $row['received_by']; ?></td>
		<td><?php echo $row['out_letter']; ?></td>
		<td><?php echo $row['refno']; ?></td>
		<td><?php echo $row['sending_dept']; ?></td>
		<td><?php echo $row['rareg']; ?></td>
		<td><?php echo $row['received_by']; ?></td>
		<td><?php echo $row['tel_no']; ?></td>
		<td><?php echo $row['received2']; ?></td>
		<td><?php echo $row['file_name']; ?></td>
		<td><?php echo $row['file_no']; ?></td>
		<td><?php echo $row['box_no']; ?></td>
		<td><a rel="facebox" href="editform.php?id=<?php echo $row['id']; ?>"> Edit </a> | <a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete">Delete</a></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>