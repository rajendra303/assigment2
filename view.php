<!DOCTYPE html>
<html>
<head>
    <title>View Car Models</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .car-image {
            width: 100px;
            height: auto;
        }

        .action-buttons {
            text-align: center;
        }

        .action-buttons button {
            padding: 5px 10px;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <h1>View Car Models</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Car Name</th>
                <th>Car Model</th>
                <th>Car Price</th>
                <th>Car Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
         
            $host = "localhost";
            $username = "root";
            $password = "9528176114";
            $database = "car_models";

            $conn = new mysqli($host, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM cars";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['car_name'] . "</td>";
                    echo "<td>" . $row['car_model'] . "</td>";
                    echo "<td>" . $row['car_price'] . "</td>";
                    echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['car_image']) . "' width='100' height='100' /></td>";
                    echo "<td class='action-buttons'>";
                    echo "<button>Edit</button>";
                    echo "<button>Delete</button>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No car models found.</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>