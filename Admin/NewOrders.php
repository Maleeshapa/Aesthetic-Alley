<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./Dashboard.css">
</head>
<body>

<div class="sidebar">
    <a href="./Dashboard.php">Home</a>
    <a href="./NewOrders.php" class="active">New Orders</a>
    <a href="../index.php">Logout</a>
</div>

<div class="content">
    <h2>New Order Details</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Order</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database configuration
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "aa";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch data from 'orders' table (changed 'order' to 'orders')
                $sql = "SELECT Id, Orders FROM orders"; // Changed 'order' to 'orders'
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . htmlspecialchars($row["Id"]) . "</td><td>" . htmlspecialchars($row["Orders"]) . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No data found</td></tr>"; // Changed colspan to 2
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
