<!DOCTYPE html>
<html>
<head>
    <title>Add New Car Model</title>
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

        form {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Responsive styles */
        @media screen and (max-width: 768px) {
            form {
                max-width: 90%;
            }
        }
    </style>
</head>
<body>
    <h1>Add New Car Model</h1>
    <form action="create_process.php" method="POST" enctype="multipart/form-data">
        <label for="car_name">Car Name:</label>
        <input type="text" id="car_name" name="car_name" required><br>

        <label for="car_model">Car Model:</label>
        <input type="text" id="car_model" name="car_model" required><br>

        <label for="car_price">Car Price:</label>
        <input type="text" id="car_price" name="car_price" required><br>

        <label for="car_image">Car Image:</label>
        <input type="file" id="car_image" name="car_image" accept="image/*" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
