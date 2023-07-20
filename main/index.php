<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
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
	<?php include 'letters_without_reference_2021/index.php'; ?>
INCOMING 2021 | <a href="letters_without_reference_2021.php">LETTERS WITHOUT REFERENCE 2021</a> | <a href="paste_errors.php">PASTE ERRORS</a> |
</div>
<div id="formdesign">
<input type="text" name="filter" value="" id="filter" placeholder="Search Record..." autocomplete="off" />
<a rel="facebox" href="add.php" id="add">ADD RECORD</a>
</div>
<div class="scrollingTable">
<table cellspacing="0" cellpadding="2" id="resultTable">
<thead>
	<tr>
		<th width="5px"> RECEIVED</th>
		<th width="7px"> REF</th>
		<th width="10px"> SENDER </th>
		<th width="10px"> SUB </th>
		<th width="23px"> TO(DEPT) </th>
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
		$result = $db->prepare("SELECT * FROM incoming2021 ORDER BY id DESC LIMIT 20");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="incoming2021"><!-- changed record to incoming2021 -->
		<td><?php echo $row['DATE_RECEIEVED']; ?></td>
		<td><?php echo $row['REF']; ?></td>
		<td><?php echo $row['SENDER']; ?></td>
		<td><?php echo $row['SUBJECT']; ?></td>
		<td><?php echo $row['TODEPT']; ?></td>
		<td><?php echo $row['RECEIVED_BY']; ?></td>
		<td><?php echo $row['DATE_OF_OUTGOING_LETTER']; ?></td>
		<td><?php echo $row['REF_NO']; ?></td>
		<td><?php echo $row['SENDING_DEPT']; ?></td>
		<td><?php echo $row['DATE_RECIEVED_AT_REGISTRY']; ?></td>
		<td><?php echo $row['RECIEVED_BY']; ?></td>
		<td><?php echo $row['TEL']; ?></td>
		<td><?php echo $row['DATE_RECIEVED']; ?></td>
		<td><?php echo $row['FILE_NAME']; ?></td>
		<td><?php echo $row['FILE_NO']; ?></td>
		<td><?php echo $row['BOX_NO']; ?></td>
		<td><a rel="facebox" href="editform.php?id=<?php echo $row['id']; ?>"> Edit </a> | <a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete">Delete</a></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
</div>
<?php 
	include_once('includes/footer.php')
?>
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
         $(this).parents(".nda_registry_trial1").animate({ backgroundColor: "#fbc7c7" }, "fast")//removed record, addes nda_registry_trial1
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>