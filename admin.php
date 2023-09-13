<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style type="text/css">
        

body, ul {
    margin: 0;
    padding: 0;
    list-style: none;
}


body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    text-align: center;
    line-height: 1.6;
}

h1 {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
}


ul {
    background-color: #333;
    padding: 10px 0;
}

ul li {
    display: inline;
    margin-right: 20px;
}

ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    transition: color 0.3s;
}

ul li a:hover {
    color: #ff5733; 
}



    </style>
    <script src="script.js"></script>
</head>
<body>
    <h1>Admin Panel</h1>
    
    <ul>
        <li><a href="create.php">Add Car Model</a></li>
        <li><a href="view.php">View Car Models</a></li>

    </ul>
</body>
</html>
