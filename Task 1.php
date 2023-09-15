<?php
$db_host = "your_database_host";
$db_username = "your_username";
$db_password = "your_password";
$db_name = "car_options";

// Create a database connection
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$carOptions = implode(", ", $_POST['car_option']); // Convert array to comma-separated string

// Insert data into the database
$sql = "INSERT INTO responses (name, phone, email, address, car_options) VALUES ('$name', '$phone', '$email', '$address', '$carOptions')";

if (mysqli_query($conn, $sql)) {
    echo "Response recorded successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
