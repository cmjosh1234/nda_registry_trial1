<?php /* DISPLAYS INCOMING 2021 PAGE*/ ?>
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/searchFunction.js" type="text/javascript" charset="utf-8"></script>
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
INCOMING 2021 | <a href="letters_without_reference_2021/index.php">LETTERS WITHOUT REFERENCE 2021</a> | <a href="paste_errors/index.php">PASTE ERRORS</a>| <a href="staff/index.php">STAFF</a>
</div>
<div id="formdesign">
<input type="text" name="filter" value="" id="filter" placeholder="Search Record..." autocomplete="off" />
<a rel="facebox" href="add.php" id="add">ADD RECORD</a>
</div>
<div class="scrollingTable">
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



		$result = $db->prepare("SELECT * FROM incoming2021 ORDER BY id DESC LIMIT $initial_page, $limit");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){ 
	?>
	<tr class="incoming2021">
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
		<td><a rel="facebox" href="editform.php?id=<?php echo $row['id']; ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/></svg> </a> - -  
		<a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/></svg></a></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
</div>



<?php  
        $result = $db->prepare("SELECT COUNT(*) FROM incoming2021");     
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
              $pageURL .= "<a class = 'active' href='index.php?page=" .$i."'>".$i. " </a>"; 
			} else {
              $pageURL .= "<a href='index.php?page=".$i."'>  ".$i." </a>"; }
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
	include_once('includes/footer2.php')
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
 	if(confirm("Sure you want to delete this update? There is NO undo!")){
 		$.ajax({
   			type: "GET",
   			url: "delete.php",
   			data: info,
   			success: function(){
				// Reload the page after successful deletion
				location.reload();   
			}
 		});
         $(this).parents(".nda_registry_trial1").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");
 	}
	return false;
});
});
</script>