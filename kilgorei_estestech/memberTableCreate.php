<?php
$servername = "db151a.pair.com";
$username = "kilgorei_2";
$password = "RXtpK9jx";
$dbname = "kilgorei_estestech";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE members (
memberID INT NOT NULL AUTO_INCREMENT,
firstname VARCHAR(128),
lastname VARCHAR(128),
phone VARCHAR(128),
email VARCHAR(128),
PRIMARY KEY memberID
)";

if ($conn->query($sql) === TRUE) {
    echo "Table members created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
