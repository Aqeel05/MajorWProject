
<?php
  // connectionTest.php
  // Originally written in Notepad++. Tests a connection to the phpMyAdmin database and returns "Getting data..."
  // (previously "is this thing working") if connected.

  // Declare attributes of the backend
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "major_project";

  // Create connection with all 4 attributes
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
  }
  //echo "Getting data...";
?>