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
<a href="../index.php"> INCOMING 2021 </a> | <a href="../letters_without_reference_2021/index.php">LETTERS WITHOUT REFERENCE 2021</a> | PASTE ERRORS
</div>
<div id="formdesign">
<input type="text" name="filter" value="" id="filter" placeholder="Search Record..." autocomplete="off" />
<a rel="facebox" href="add_pe.php" id="add">ADD RECORD</a>
</div>
<div class="scrollingTable">
<table cellspacing="0" cellpadding="2" id="resultTable">
<thead>
	<tr>
		<th width="5px"> Field0</th>
	</tr>
</thead>
<tbody>
	<?php
		include('../connect.php');		
		$result = $db->prepare("SELECT * FROM paste_errors ORDER BY id DESC LIMIT 20");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="paste_errors"><!-- changed record to incoming2021 -->
		<td><?php echo $row['Field0']; ?></td>
		<td><a rel="facebox" href="editform.php?id=<?php echo $row['id']; ?>"> Edit </a> | <a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete">Delete</a></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
</div>
<?php 
	include_once('../includes/footer.php')
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