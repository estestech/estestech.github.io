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
$sql ="INSERT INTO members (firstname, lastname, phone, email) VALUES ('" . $_POST["firstname"] . "','" . $_POST["lastname"] . "','" . $_POST["phone"] . "','" . $_POST["email"] ."')"; 

echo "<br>";
echo $sql;

echo "<br>";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
    echo "<br>";
    echo $sql;
}

$conn->close();
?>
<a href="addMember.php">Add another member</a>