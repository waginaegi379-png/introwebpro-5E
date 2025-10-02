<?php
include 'connect.php';

// SQL untuk membuat tabel users
$sql = "CREATE TABLE IF NOT EXISTS users_register (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    fullname VARCHAR(100) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabel 'users' berhasil dibuat atau sudah ada.";
} else {
    echo "Error membuat tabel: " . $conn->error;
}

$conn->close();
?>
