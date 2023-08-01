<script src="../argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
.paging{
	margin-top: 10px;
}
.paging a{
	display: inline-block;
	padding: 5px 10px;
	margin: 0 3px;
	border: 1px solid #ccc;
	text-decoration: none;
	color: #333;
}
.paging a.active{
	background-color: #007bff;
	color: #fff;
}
.paging a:hover:not(.active) {background-color: #ddd;}
</style>
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
<a href="../index.php"> INCOMING 2021 </a> | <a href="../letters_without_reference_2021/index.php">LETTERS WITHOUT REFERENCE 2021</a> | PASTE ERRORS |  <a href="../Staff/index.php"> STAFF </a>
</div>
<?php
// Function to handle the search filter and perform the search
function performSearch($db, $search_filter, $initial_page, $limit)
{
    $search_filter = '%' . $search_filter . '%'; // Add wildcards for partial matches
    $stmt = $db->prepare("SELECT * FROM paste_errors 
                           WHERE 
                               Field0 LIKE :search_filter 
                           ORDER BY id DESC");

    // Bind parameters to the prepared statement
    $stmt->bindValue(':search_filter', $search_filter, PDO::PARAM_STR);

    // Execute the prepared statement
    $stmt->execute();

    return $stmt;
}


// Establish database connection
include('../connect.php');
			// variable to store number of rows per page
			$limit = 20;
			$page_number = isset($_GET["page"]) ? $_GET["page"] : 1;
			// get the initial page number
			$initial_page = ($page_number-1) * $limit;       
			// get data of selected rows per page 
		if (isset($_GET['filter']) && !empty($_GET['filter'])) {
			// Get the search filter input from the user
			$search_filter = $_GET['filter'];
			// Perform the search and get the result set
			$result = performSearch($db, $search_filter,$initial_page,$limit);
		} else {
			// If the search filter is not set, display all records as before
			$result = $db->prepare("SELECT * FROM paste_errors ORDER BY id DESC LIMIT $initial_page, $limit");
			$result->execute();
		}
?>

<div id="formdesign">
	<form action="index.php" method="GET">
        <input type="text" name="filter" value="<?php echo isset($_GET['filter']) ? $_GET['filter'] : ''; ?>" id="filter" placeholder="Search Record..." autocomplete="off" />
        <button type="submit">Search</button>
    </form><a rel="facebox" href="add_pe.php" id="add">ADD RECORD</a>
</div>
<div class="scrollingTable">
<table cellspacing="0" cellpadding="2" id="resultTable">
<thead>
	<tr>
	<tr>
		<th> Field0 </th>
	</tr>
</thead>
<tbody>
	<?php
		// Loop through the result set and display data
		while ($row = $result->fetch()) {
			// Display each row's data here...
	?>
	<tr class="paste_errors">
    <td><?php echo $row['Field0']; ?></td>	
	<td><a rel="facebox" href="editform.php?id=<?php echo $row['id']; ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/></svg> </a> - -
		<a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/></svg></a></td>
	</tr>
	<?php
	}
	?>
</tbody>
</table>
</div>


<div class="paging">
<?php  
        $result = $db->prepare("SELECT COUNT(*) FROM paste_errors");     
        $result->execute();    
		$row = $result->fetch();    
        $total_rows = $row[0];              
    echo "</br>";            
        // get the required number of pages
        $total_pages = ceil($total_rows / $limit);  
		$pagination_limit = 28; // Change this value to limit the number of page numbers shown
		$half_pagination = ceil($pagination_limit / 2);
		$start_page = max(1, $page_number - $half_pagination);
		$end_page = min($start_page + $pagination_limit - 1, $total_pages);   
        $pageURL = "";     
        if($page_number>=2){   
            echo "<a href='index.php?page=".($page_number-1)."'>  Prev </a>";   }                          
        for ($i=$start_page; $i<=$end_page; $i++) {   
		"<div class=pageNo>";
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
	include_once('../includes/footer2.php')
?>
<script src="../js/searchFunction.js"></script>
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