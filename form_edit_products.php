<?php

// create connection
include 'connect.php';

// -----------------read one record seleted---------------
// Read one record
$sql = "SELECT * FROM products WHERE id=$_GET[id]";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h2>Update Product</h2>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $row['id'] ?>" readonly><br>
    Name: <br><input type="text" name="name" value="<?= $row['name'] ?>"><br>
    description: <br><textarea name="desc"><?= $row['description'] ?></textarea><br>
    price: <br><input type="text" name="price" value="<?= $row['price'] ?>"<br><br>
    <input type="submit" value="Update Product">
</form>

<?php
// close connection
$conn->close();
?>