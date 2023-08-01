<div id="formdesign">
    <form action="search.php" method="GET">
        <input type="text" name="filter" value="" id="filter" placeholder="Search Record..." autocomplete="off" />
        <button type="submit">Search</button>
    </form>
    <a rel="facebox" href="add.php" id="add">ADD RECORD</a>
</div>
[12:44, 7/31/2023] MJ: <?php
// search.php

// Include the database connection file
include('connect.php');

// Get the search query from the URL parameter
if (isset($_GET['filter'])) {
    $search_query = $_GET['filter'];
} else {
    // If the search query is not set, redirect back to the main page
    header("Location: index.php");
    exit;
}

// Prepare the SQL query to search for records
$search_query = '%' . $search_query . '%'; // Wildcard for partial matches
$result = $db->prepare("SELECT * FROM incoming2021 
                        WHERE 
                            DATE_RECEIEVED LIKE ? OR
                            REF LIKE ? OR
                            SENDER LIKE ? OR
                            SUBJECT LIKE ? OR
                            TODEPT LIKE ? OR
                            RECEIVED_BY LIKE ? OR
                            DATE_OF_OUTGOING_LETTER LIKE ? OR
                            REF_NO LIKE ? OR
                            SENDING_DEPT LIKE ? OR
                            DATE_RECIEVED_AT_REGISTRY LIKE ? OR
                            RECIEVED_BY LIKE ? OR
                            TEL LIKE ? OR
                            DATE_RECIEVED LIKE ? OR
                            FILE_NAME LIKE ? OR
                            FILE_NO LIKE ? OR
                            BOX_NO LIKE ?
                        ORDER BY id DESC LIMIT $initial_page, $limit");

// Bind parameters to the prepared statement
$result->execute(array($search_query, $search_query, $search_query, $search_query,
                        $search_query, $search_query, $search_query, $search_query,
                        $search_query, $search_query, $search_query, $search_query,
                        $search_query, $search_query, $search_query, $search_query,
                        $search_query));

// Display the search results
for ($i = 0; $row = $result->fetch(); $i++) {
    // Display the records matching the search query in the same way as before
    // ... (rest of the table rows)
}
?>