<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/searchFunction.js" type="text/javascript" charset="utf-8"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="../src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="../lib/jquery.js" type="text/javascript"></script>
  <script src="../src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : '../src/loading.gif',
        closeImage   : '../src/closelabel.png'
      })
    })
  </script>
<div id="log">
<a href="../index.php"> INCOMING 2021 </a> | LETTERS WITHOUT REFERENCE 2021 | <a href="../paste_errors/index.php">PASTE ERRORS</a>
</div>
<div id="formdesign">
<input type="text" name="filter" value="" id="filter" placeholder="Search Record..." autocomplete="off" />
<a rel="facebox" href="add_le.php" id="add">ADD RECORD</a>
</div>
<div class="scrollingTable">
<table cellspacing="0" cellpadding="2" id="resultTable">
<thead>
	<tr>
		<th width="5%"> LETTER REF</th>
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
		include('../connect.php');	
				// variable to store number of rows per page
				$limit = 20;
				// update the active page number
				if (isset($_GET["page"])) {    
					$page_number  = $_GET["page"];}
				else {    
				  $page_number=1;    }       
				// get the initial page number
				$initial_page = ($page_number-1) * $limit;       
				// get data of selected rows per page 
		
		$result = $db->prepare("SELECT * FROM letters_without_reference_2021 ORDER BY id DESC LIMIT 15"); 
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="letters_without_reference"><!-- changed record to incoming2021 -->
		<td><?php echo $row['LETTER_REF']; ?></td>
		<td><?php echo $row['ADDRESSED_TO']; ?></td>
		<td><?php echo $row['SUBJECT']; ?></td>
		<td><?php echo $row['DATE_OF_LETTER']; ?></td>
		<td><?php echo $row['DATE_RECIEVED_AT_REGISTRY']; ?></td>
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
</div>

<?php  
        $result = $db->prepare("SELECT COUNT(*) FROM letters_without_reference_2021");     
        $result->execute();    
		$row = $result->fetch();    
        $total_rows = $row[0];              
    echo "</br>";            
        // get the required number of pages
        $total_pages = ceil($total_rows / $limit);     
        $pageURL = "";    
        if($page_number>=2){   
            echo "<a href='index.php?page=".($page_number-1)."'>  Prev </a>";   }                          
        for ($i=1; $i<=$total_pages; $i++) {   
		"<div id=pageNo>";
          if ($i == $page_number) {   
              $pageURL .= "<a class = 'active' href='index.php?page=" .$i."'>".$i. "</a>"; 
			} else {
              $pageURL .= "<a href='index.php?page=".$i."'>  ".$i."</a>"; }
		"</div>";
		};     
        echo $pageURL;    
        if($page_number<$total_pages){   
            echo "<a href='index.php?page=".($page_number+1)."'>  Next </a>";   
        } 
?>
</div>    
<div class="inline">   
<input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
placeholder="<?php echo $page_number."/".$total_pages; ?>" required>   
<button onClick="go2Page();">Go</button>   
</div>    
</div>   
</div>  

<script>   
function go2Page()   
{   
  var page = document.getElementById("page").value;   
  page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
  window.location.href = 'index.php?page='+page;   
}  
</script>      

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