<?php
//create connect
include '../connect.php';

$sql = "DELETE from user WHERE id = $_GET[id]";
//check if data is inserted successfully
if ($conn->query($sql) === TRUE) {
  // echo "Selected  record delete successfully";
  // redirect to file read_one (view data)
  header('Location: view_account.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//close connection
$conn->close();
?>
