# CarsDekho Website

This HTML code creates a website template for CarsDekho, a car portal. It includes a navigation bar, a banner section, sections for "Most Searched Cars" and "Latest Car Models," and a footer.

## Getting Started

To use this HTML code for your CarsDekho website, follow these steps:

1. **Download the HTML File:** Right-click on the provided HTML code, select "Save Page As" (or similar), and save it with a `.html` extension.

2. **Logo and Images:** Replace the logo image URL and banner image URLs in the code with your own image URLs. Make sure to specify the correct paths to your images.

3. **Admin Panel Link:** Update the `<a href="admin.php">Admin Panel</a>` link in the navigation bar to point to the actual admin panel page if needed.

4. **Content:** Customize the content in the banner, "Most Searched Cars," and "Latest Car Models" sections with your own text, images, and car details.

5. **Styling:** The code includes custom CSS for styling the website. You can further customize the styles in the `<style>` section to match your design preferences.

6. **Responsive Design:** The code includes responsive design styles for smaller screens (max-width: 768px). Ensure that your content looks good on both desktop and mobile devices.

7. **Footer:** Update the links and contact information in the footer section as per your requirements.

8. **Testing:** Before deploying, test the website in different web browsers and on different devices to ensure compatibility.

==========================================================================================================================================
# CarsDekho Database Setup and Data Management

This README provides step-by-step instructions on how to set up a MySQL database, insert data into it, and fetch data using PHP for the CarsDekho project.

## Database Setup

### Step 1: Access MySQL

- You need access to a MySQL database server. You can install MySQL locally or use a remote MySQL server provided by a hosting service.

### Step 2: Connect to MySQL

- Use a MySQL client (e.g., phpMyAdmin or MySQL command line) to connect to your MySQL server using your username and password.

### Step 3: Create a Database

- Once connected, create a new database using SQL commands. For example:

CREATE DATABASE car_models;

USE car_models;

CREATE TABLE cars (
id INT AUTO_INCREMENT PRIMARY KEY,
car_name VARCHAR(255) NOT NULL,
car_model VARCHAR(255) NOT NULL,
car_price DECIMAL(10, 2) NOT NULL,
car_image LONGBLOB
);

<?php
// Establish a database connection (replace these values with your database credentials)
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

// Convert car price input to decimal
$car_price = 0.00;

if (strpos($car_price_input, 'cr') !== false) {
    // Convert crore to millions
    $car_price = (float) str_replace(' cr', '', $car_price_input) * 10_000_000.00;
} elseif (strpos($car_price_input, 'lakhs') !== false) {
    // Convert lakhs to hundreds of thousands
    $car_price = (float) str_replace(' lakhs', '', $car_price_input) * 100_000.00;
} else {
    // Handle other cases, assuming input is already in decimal format
    $car_price = (float) $car_price_input;
}

// Handle image upload
$car_image = file_get_contents($_FILES['car_image']['tmp_name']);

// Insert data into the database with image data
$sql = "INSERT INTO cars (car_name, car_model, car_price, car_image) VALUES (?, ?, ?, ?)";

// Create a prepared statement
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("ssdb", $car_name, $car_model, $car_price, $car_image);

if ($stmt->execute()) {
    echo "Car model added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $stmt->error;
}

$stmt->close();
$conn->close();
?>



## Data Insertion

### Step 5: Insert Data

- To insert data into the "cars" table, use the provided PHP script or customize it as needed:

1. **Establish Database Connection:** Ensure the PHP script connects to the database correctly with the host, username, password, and database name.

2. **Get Form Data:** Use `$_POST` to retrieve data submitted from a form, such as Car Name, Car Model, Car Price, and Car Image data.

3. **Data Transformation:** Convert input data, especially Car Price, to the desired format. The script provided handles values in crores and lakhs.

4. **Handle Image Upload:** Use `file_get_contents` to read the uploaded image file and store it in a variable.

5. **Prepare SQL Statement:** Create an SQL statement with placeholders for the data you want to insert.

6. **Create Prepared Statement:** Prepare the SQL statement using `$conn->prepare()`. This helps prevent SQL injection.

7. **Bind Parameters:** Bind the parameters (Car Name, Car Model, Car Price, and Car Image) to the prepared statement using `$stmt->bind_param()`.

8. **Execute Query:** Use `$stmt->execute()` to execute the prepared statement and insert data into the database.

## Data Retrieval

### Step 6: Fetch Data

- To fetch data from the "cars" table, create another PHP script:

1. **Establish Database Connection:** Similar to the insert script, establish a connection to the database.

2. **Write SQL Query:** Write an SQL query to retrieve the data you need. For example, to fetch all car models, use:
   ```
   SELECT * FROM cars;
   ```

3. **Execute Query:** Use `$conn->query($sql)` to execute the query and retrieve the result.

4. **Process Result:** Loop through the result set using a `while` loop to fetch each row. Access the data using `$row['column_name']`.

5. **Display Data:** Display the fetched data in your HTML template as needed.

6. **Close Connection:** Don't forget to close the database connection when done.

## Conclusion

This process allows you to create a database, insert data into it, and fetch data from it using PHP and MySQL. Ensure that your PHP scripts and HTML templates are properly integrated to display and manipulate the data as desired on your website.

For any further assistance or customization, refer to PHP and MySQL documentation and tutorials.



==========================================================================================================================================

# Admin Panel HTML Template

This is a basic HTML template for an admin panel web application. It includes a navigation menu with links to "Add Car Model" and "View Car Models" pages.

## Getting Started

To use this HTML template, follow these steps:

1. Download the HTML file: Right-click on the provided HTML code, select "Save Page As" (or similar), and save it with a `.html` extension.

2. Customize the content: You can modify the content within the `<body>` section of the HTML file to suit your needs. Update the page title, navigation links, and any other content as required.

3. Add JavaScript: If you have JavaScript functionality to include, you can do so by editing the `<script src="script.js"></script>` line. Replace `"script.js"` with the path to your JavaScript file.

4. Styling: The template includes basic CSS styles for the body, header, and navigation menu. Customize the styles in the `<style>` section to match your design preferences.

5. Hosting: To make your admin panel accessible online, you'll need to host it on a web server. You can use a hosting service or set up your own server.

6. Testing: Before deploying, make sure to test your admin panel in different web browsers to ensure compatibility.

========================================================================================================================================


# View Car Models Web Page

This HTML code creates a simple web page for viewing a list of car models from a database. It displays car details such as ID, Car Name, Car Model, Car Price, and Car Image in a table format.

## Getting Started

To use this HTML code for viewing car models, follow these steps:

1. **Download the HTML File:** Right-click on the provided HTML code, select "Save Page As" (or similar), and save it with a `.html` extension.

2. **Configure Database Connection:** You will need to configure the database connection in the PHP section of the code to fetch car model data. Modify the following lines to match your database credentials:

    ```php
    $host = "localhost";
    $username = "root";
    $password = "your_password";
    $database = "car_models";
    ```

3. **Database Setup:** Ensure you have a database named `car_models` in your MySQL server. You may need to import the necessary SQL schema and data.

4. **PHP Code:** The PHP code retrieves car model data from the database and populates the table. Customize the SQL query and table structure as per your database schema.

5. **Styling:** The code includes basic CSS for styling the page. You can further customize the styles in the `<style>` section to match your design preferences.

6. **Testing:** Before deploying, test the web page in different web browsers to ensure compatibility.

==========================================================================================================================================


# Add New Car Model Web Page

This HTML code creates a web page for adding a new car model to a database. It includes a form with fields for Car Name, Car Model, Car Price, and Car Image upload.

## Getting Started

To use this HTML code for adding new car models, follow these steps:

1. **Download the HTML File:** Right-click on the provided HTML code, select "Save Page As" (or similar), and save it with a `.html` extension.

2. **Form Submission:** The form in the HTML code submits data to a PHP script named `create_process.php`. Ensure that you have this PHP script ready to handle the form submission and insert data into your database.

3. **Styling:** The code includes basic CSS for styling the page and form. You can further customize the styles in the `<style>` section to match your design preferences.

4. **Form Fields:** The form includes fields for Car Name, Car Model, Car Price, and Car Image upload. You can customize these fields and add more if needed.

5. **File Upload:** The Car Image field allows users to upload images. Ensure that you have the necessary server-side code to handle image uploads and store them in an appropriate directory.

6. **Testing:** Before deploying, test the web page in different web browsers to ensure compatibility.

====================================================================================================================================

