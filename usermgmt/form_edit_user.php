<?php

// create connection
include '../connect.php';

// -----------------read one record seleted---------------
// Read one record
$sql = "SELECT * FROM user WHERE id=$_GET[id]";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h2>Update User Account</h2>
<form action="update_user.php" method="post">
    <input type="hidden" name="id" value="<?= $row['id'] ?>"><br>
    Username: <br><input type="text" name="usr" value="<?= $row['username'] ?>" readonly><br>
    Fullname: <br><input type="text" name="fname" value="<?= $row['fullname'] ?>"><br>
    Role:<br>
    <?php
    //check role
    $admin = $operator = $visitor = "";
    if($row['role']=='admin'){
        $admin = 'selected';
    }
    if($row['role']=='operator'){
        $operator = 'selected';
    }
    if($row['role']=='visitor'){
        $visitor = 'selected';
    }
    ?>
    <select name="role" required>
        <option value="">-- choose your role --</option>
        <option value="admin">Admin <?= $admin; ?></option>
        <option value="operator">Operator <?= $operator; ?></option>
        <option value="visitor">Visitor <?= $visitor; ?></option>
    </select>
    <input type="submit" value="Update User">
</form>

<?php
// close connection
$conn->close();
?>