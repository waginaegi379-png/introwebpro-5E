<?php
include "../connect.php";

// // sql to create table
// $sql = "CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// sql to create table
$sql = "CREATE TABLE user(
id INT(11) NOT NULL AUTO_INCREMENT,
username VARCHAR(50) NOT NULL UNIQUE,
password VARCHAR(100) NOT NULL,
fullname VARCHAR(50) NOT NULL,
role Varchar (20) NOT NULL,
staus ENUM ('active','inactive') DEFAULT 'active',
reg_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
modified TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (id) 
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>