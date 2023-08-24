
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<?php
$servername = "localhost"; // Change this to your server name
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "subscribe_system"; // Change this to your database name

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assume you have collected appointment details from a form
$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$message = $_POST['message'];

// Insert appointment data
$insertAppointmentQuery = "INSERT INTO appointments (name, email, phone_number, message)
                            VALUES ('$name', '$email', '$phone_number', '$message')";

if ($conn->query($insertAppointmentQuery) === TRUE) {
    echo "Appointment created successfully!";
} else {
    echo "Error: " . $insertAppointmentQuery . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

