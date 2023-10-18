<?php

$serverName = "s30.winhost.com";
$connectionInfo = array(
    "Database" => "DB_128040_group1",
    "Uid" => "DB_128040_group1_user",
    "PWD" => "Bananas4Breakfast!"
);

// Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn) {
    echo "Connected!";
} else {
    die(print_r(sqlsrv_errors(), true));
}

// Retrieve username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to check if the username and password exist in the database
$sql = "SELECT * FROM tableName WHERE username = ? AND password = ?";
$params = array($username, $password);

// Execute the query
$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Check if a row is returned, indicating a successful login
if (sqlsrv_has_rows($stmt)) {
    echo "Login successful!";
} else {
    echo "Invalid username or password.";
}

// Close the connection and statement
sqlsrv_close($conn);
sqlsrv_free_stmt($stmt);
?>

