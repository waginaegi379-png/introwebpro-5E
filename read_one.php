<?php
//create connerction
include 'connect.php';

//ex.1 read one record by id
//$sql = "SELECT * FROM products WHERE id=1";
//ex.2 read one recode by name
//$sql = "SELECT * FROM products WHERE name='External Monitor'";
//ex.3 read one record by price
$sql = "SELECT * FROM products WHERE price=15000000";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

//view data
echo "ID: " . $row['id'] . "<br>";
echo "Name: " . $row['name'] . "<br>";
echo "Description: " . $row['description'] . "<br>";
echo "Price: " . $row['price'] . "<br>";
echo "Created: " . $row['created'] . "<br>";

echo "<a href='form_input_products.php'>Add products</a><br>";
echo "<strong>ID:</strong> " . $row['id'] . "<br>" . "<strong>Name:</strong> " . $row['name'] . "<br>" . "Description: " . $row['description'] . "<br>" . "Price: " . $row['price'] . "<br>" . "Created: " . $row['created'] . "<br>";
echo "<table border=1>
<tr><th>ID</th></th><th>Name</th><th>Description</th><th>Price</th><th>Created</th>
<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['description'] . "</td><td>" . $row['price'] . "</td><td>" . $row['created'] . "</td></tr>
</table>";

//close connection
$conn->close();
?>