<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            border: 3px solid #f1f1f1;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

            button:hover {
                opacity: 0.8;
            }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 100px;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.password {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.password {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <h2>Login Form</h2>

    <form action="/action_page.php" method="post">
        <div class="imgcontainer">
            <img src="https://cdn.freebiesupply.com/logos/large/2x/mis-logo-png-transparent.png" alt="Avatar" class="avatar" width="40px">
        </div>

        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>

<?php
$serverName = "s30.winhost.com";
$connectionOptions = array(
    "Database" => "DB_128040_group1",
    "Uid" => "DB_128040_group1_user",
    "PWD" => "Bananas4Breakfast!"
);

// Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

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


</body>
</html>