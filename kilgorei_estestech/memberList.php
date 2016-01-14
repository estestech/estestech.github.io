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

$sql = "SELECT firstname,lastname,phone,email FROM members";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["firstname"]. " " . $row["lastname"]. " - phone:" . $row["phone"]. " - email:" . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>