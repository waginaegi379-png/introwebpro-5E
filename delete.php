<?php
//create connection
include 'connect.php';

//query for delete selected successfuly
$sql = "DELETE from products WHERE id =$_GET[id]";
//check if data is inserted successfully
if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  // redirect to file read_one/read_all (view data)
  header('Location: read_all.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
//close connection
$conn->close();
?>