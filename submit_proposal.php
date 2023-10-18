<?php
// Get the form data
$description = $_POST['Req_Description'];
$dueDate = $_POST['Due_Date'];
$dateSubmitted = $_POST['project_datesubmitted'];

// Database connection information
$server = "tcp:s30.winhost.com";
$database = "DB_128040_group1";
$username = "DB_128040_group1_user";
$password = "Bananas4Breakfast!";

// Create a connection to the database
$conn = new mysqli($server, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL query
$sql = "INSERT INTO YourTableName (Req_Description, Due_Date, project_datesubmitted) VALUES ('$description', '$dueDate', '$dateSubmitted')";

// Execute the query and check if it was successful
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
