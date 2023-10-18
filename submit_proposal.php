<?php
// Get the form data
$description = $_POST['Req_Description'];
$dueDate = $_POST['Due_Date'];
$dateSubmitted = $_POST['Date_Submitted'];

// Database connection information
$server = "s30.winhost.com";
$database = "DB_128040_group1";
$username = "DB_128040_group1_user";
$password = "Bananas4Breakfast!";

// Create a connection to the database
$conn = new mysqli($server, $database, $username, $password);

// Check the connection
if ($conn->connect_error) {
    die("oooooooooooooo failed: " . $conn->connect_error);
}

// Prepare the SQL query
$sql = "Request (Req_Description, Due_Date, Date_Submitted) VALUES ('$description', '$dueDate', '$dateSubmitted')";

// Execute the query and check if it was successful
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Shumana: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
