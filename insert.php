 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$roll = $_POST['roll'];
$dob = $_POST['dob'];
$hobby = $_POST['hobby'];

$sql = "INSERT INTO student_info (name, roll, dob, hobby)
        VALUES ('$name', '$roll', '$dob', '$hobby')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>