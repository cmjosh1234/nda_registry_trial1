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
		<th width="5%"> Date In</th>
		<th width="7%"> Date Out</th>
		<th width="10%"> Received By </th>
		<th width="10%"> Document Type </th>
		<th width="23%"> Description </th>
		<th width="10%"> Office </th>
		<th width="5%"> Status </th>
		<th width="10%"> Forwarded To </th>
		<th width="10%"> Action </th>
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
		<td><?php echo $row['date']; ?></td>
		<td><?php echo $row['dateout']; ?></td>
		<td><?php echo $row['receive_by']; ?></td>
		<td><?php echo $row['doc_type']; ?></td>
		<td><?php echo $row['description']; ?></td>
		<td><?php echo $row['office']; ?></td>
		<td><?php echo $row['status']; ?></td>
		<td><?php echo $row['ft']; ?></td>
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