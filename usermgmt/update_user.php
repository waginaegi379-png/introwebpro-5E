<?php
//get data from the edit form
$userID = $_POST['id'];
$fname = $_POST['fname'];
$role = $_POST['role'];


// echo "Product name:" , $prodName, "<br>";
// echo "Product description: " , $prodDesc, "<br>";
// echo "Product price: " , $prodPrice, "<br><br>";
//create connection
include '../connect.php';

//update data
$sql = "UPDATE user 
        SET fullname = '$fname',
            role = '$role'
        WHERE id = $userID";


// VALUES ('$_POST[name]', '$_POST[desc]', '$_POST[price]')";

//check if data is inserted successfully
if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  // redirect to file read_one (view data)
  header('Location: view_account.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



