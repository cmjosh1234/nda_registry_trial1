<?php
// Assuming you have already connected to the database
// Include your database connection file here
 include('connect.php');

if (isset($_POST['query'])) {
  $searchQuery = $_POST['query'];

  // Modify this query based on your table structure and the column you want to search
  $sql = "SELECT * FROM incoming2021 WHERE REF_NO LIKE :searchQuery";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':searchQuery', '%' . $searchQuery . '%', PDO::PARAM_STR);

  if ($stmt->execute()) {
    // Fetch the results as an associative array
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Check if there are any results
    if ($stmt->rowCount() > 0) {
      // Loop through the results and generate HTML for table rows
      foreach ($results as $row) {
        // Replace the column names with the actual column names from your table
        $html .= '<tr>';
        $html .= '<td>' . $row['column1'] . '</td>';
        $html .= '<td>' . $row['column2'] . '</td>';
        // Add more columns if needed
        $html .= '</tr>';
      }
    } else {
      // No results found
      $html = '<tr><td colspan="2">No results found.</td></tr>';
    }
  } else {
    // Error in executing the query
    $html = '<tr><td colspan="2">Error in fetching data.</td></tr>';
  }
} else {
  // Query parameter not received
  $html = '<tr><td colspan="2">No search query received.</td></tr>';
}

// Output the HTML
echo $html;
?>
