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
<a href="letters_without_reference_2021.php"> INCOMING 2021 </a> | LETTERS WITHOUT REFERENCE 2021 | <a href="../paste_errors/index.php">PASTE ERRORS</a> | <a href="../index.php">Logout</a>
</div>
<div id="formdesign">
<input type="text" name="filter" value="" id="filter" placeholder="Search Record..." autocomplete="off" />
<a rel="facebox" href="add.php" id="add">ADD RECORD</a>
</div>
<table cellspacing="0" cellpadding="2" id="resultTable">
<thead>
	<tr>
		<th width="5%"> LETTER_REF</th>
		<th width="7%"> ADDRESSED TO</th>
		<th width="10%"> SUBJECT</th>
		<th width="10%"> DATE OF LETTER</th>
		<th width="23%"> DATE RECIEVED AT REGISTRY</th>
		<th width="10%"> RECIPIENT</th>
		<th width="5%"> DATE DELIVERED</th>
		<th width="10%"> FILE NAME </th>
		<th width="10%"> FILE NO </th>
		<th width="10%"> BOX NO </th>
	</tr>
</thead>
<tbody>
	<?php
		include('connect.php');		
		$result = $db->prepare("SELECT * FROM letters_without_reference "); //removed ORDER BY id DESC
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="letters_without_reference"><!-- changed record to incoming2021 -->
		<td><?php echo $row['LETTER_REF']; ?></td>
		<td><?php echo $row['ADDRESSED TO']; ?></td>
		<td><?php echo $row['SUBJECT']; ?></td>
		<td><?php echo $row['DATE OF LETTER']; ?></td>
		<td><?php echo $row['DATE RECIEVED AT REGISTRY']; ?></td>
		<td><?php echo $row['RECIPIENT']; ?></td>
		<td><?php echo $row['DATE_DELIVERED']; ?></td>
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