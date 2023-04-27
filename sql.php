<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "Onur@face1234";
$dbname = "books";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the data
//$category = "Fiction";
$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);

// Display the data in an HTML table
echo '<table border="2px">';
echo '<tr><th>ID</th><th>Name</th><th>Author</th></tr>';
while ($row = mysqli_fetch_assoc($result)) {
  echo '<tr>';
  echo '<td>' . $row['id'] . '</td>';
  echo '<td>' . $row['name'] . '</td>';
  echo '<td>' . $row['author'] . '</td>';
  echo '</tr>';
}
echo '</table>';

// Close the database connection
mysqli_close($conn);
?>
