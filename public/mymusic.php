<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "music10";


$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Connection failed:" . mysqli_connect_error());
}

echo "Connected successfully";

$sql = "SELECT id, name, created FROM tracks";
$result = $conn->query($sql);

echo "<hr>";
if ($result->num_rows > 1) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["created"]. "</br>";
    }
}else{
    echo "0 results";
}

echo "<hr>";
$conn->close();