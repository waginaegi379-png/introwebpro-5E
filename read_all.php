<?php

// create connection
include 'connect.php';

echo "<br>";

// Read one record
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<a href='from_input_product.php'>Add Prodcut</a>";
    //table format
    echo "<table = border='1'>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Created</th>
        <th>Action</th>
        </tr>";

  // output data of each row
  // view data of each row
  $no = 1;
  while($row = $result->fetch_assoc()) {
    //Body of Loop
    echo 
    "<tr><td>" . $no++ . "</td>
        <td>" . $row["name"]. "</td>
        <td>" . $row["description"]. "</td>
        <td>" . $row["price"]. "</td>
        <td>" . $row["created"]. "</td>
        <td><a href='form_edit_product.php?id=$row[id]'>Edit </a> | 
        <a href='delete.php?id=$row[id]' onclick=\"return confirm('Are you sure to delete this record')\" >Delete</a></td>
    </tr>";
  }
  echo "</table>";
} else {
    //table empty
  echo "0 results - Table is empty";
}

echo "<br>";
// Close connection
$conn->close();
?>