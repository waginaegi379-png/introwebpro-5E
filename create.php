<?php

$prodName = $_POST['name'];
$prodDesc = $_POST['desc'];
$prodPrice = $_POST['price'];

//create connection
include 'connect.php';

//insert data
$sql = "INSERT INTO products (name, description, price)
VALUES ('$_POST[name]', '$_POST[desc]', '$_POST[price]')";

//check if data is inserted succesfully
if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
  //rediract to file read_one (view data)
  header('Location: read_all.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>