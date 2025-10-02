<?php
//ambil data dari form
$usr = $_POST['username'];
$psw = $_POST['password'];
$fname = $_POST['fullname'];
$role = $_POST['role'];

//buat koneksi
include '../connect.php';

//hash password biar aman
$hashed_pass = password_hash($psw, PASSWORD_DEFAULT);

//insert data
$sql = "INSERT INTO user (username, password, fullname, role)
        VALUES ('$usr', '$hashed_pass', '$fname', '$role')";

//cek jika berhasil
if ($conn->query($sql) === TRUE) {
    header('Location: view_account.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
