<?php
$host = "localhost";
$username = "root";
$password = "9528176114";
$database = "car_models";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$car_name = $_POST['car_name'];
$car_model = $_POST['car_model'];
$car_price_input = $_POST['car_price'];

$car_price = 0.00;

if (strpos($car_price_input, 'cr') !== false) {
    
    $car_price = (float) str_replace(' cr', '', $car_price_input) * 10_000_000.00;
} elseif (strpos($car_price_input, 'lakhs') !== false) {
    
    $car_price = (float) str_replace(' lakhs', '', $car_price_input) * 100_000.00;
} else {
    
    $car_price = (float) $car_price_input;
}


$car_image = file_get_contents($_FILES['car_image']['tmp_name']);


$sql = "INSERT INTO cars (car_name, car_model, car_price, car_image) VALUES (?, ?, ?, ?)";


$stmt = $conn->prepare($sql);


$stmt->bind_param("ssdb", $car_name, $car_model, $car_price, $car_image);

if ($stmt->execute()) {
    echo "Car model added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $stmt->error;
}

$stmt->close();
$conn->close();
?>

