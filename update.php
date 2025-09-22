<?php
//get data from the edit form
$prodID = $_POST['id'];
$prodName = $_POST['name'];
$prodDesc = $_POST['desc'];
$prodPrice = $_POST['price'];

// echo "Product name:" , $prodName, "<br>";
// echo "Product description: " , $prodDesc, "<br>";
// echo "Product price: " , $prodPrice, "<br><br>";
//create connection
include 'connect.php';

//update data
$sql = "UPDATE products 
        SET name = '$prodName',
        description = '$prodDesc',
        price = $prodPrice
        WHERE id = $prodID";

// VALUES ('$_POST[name]', '$_POST[desc]', '$_POST[price]')";

//check if data is inserted successfully
if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  // redirect to file read_one (view data)
  header('Location: read_all.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>