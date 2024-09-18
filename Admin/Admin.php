<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #87CEEB;
            color: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #login {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #login h2 {
            color: #264653;
        }

        #login form {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #1B4332;
            color: #FFFFFF;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        #login form label {
            color: #87CEEB;
            font-weight: bold;
        }

        #login form input[type="text"],
        #login form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }

        #login form input[type="submit"] {
            background-color: #87CEEB;
            color: #FFFFFF;
            border: none;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #login form input[type="submit"]:hover {
            background-color: #6BB9D5;
        }
    </style>
</head>
<body>
   
<section id="login">
       <h2>Login Page</h2>
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
           <label for="username">Username:</label>
           <input type="text" id="username" name="username" placeholder="Username" required>
           <label for="password">Password:</label>
           <input type="password" id="password" name="password" placeholder="Password" required>
           <input type="submit" value="Login">
       </form>
   </section>

   <?php
    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aa";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get username and password from POST request
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Prepare and execute SQL query to fetch user from database
        $sql = "SELECT * FROM admin WHERE Email = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // If user exists, redirect to Dashboard.php
            header("Location: Dashboard.php");
            exit();
        } else {
            // If user does not exist, redirect back to login page with error message
            echo "<p style='color: red;'>Invalid username or password!</p>";
        }

        $conn->close();
    }
    ?>
</body>
</html>