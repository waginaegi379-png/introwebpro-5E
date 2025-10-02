<?php
// create connection
include '../connect.php';

echo "<br>";

// Read records
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<a href='registration.php'>Add New User</a><br>";
    //table format
    echo "<table border='1'>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Role</th>
            <th>Reg Date</th>
            <th>Action</th>
        </tr>";

    // output data of each row
    $no = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $no++ . "</td>
                <td>" . $row['username'] . "</td>
                <td>" . $row['fullname'] . "</td>
                <td>" . $row['role'] . "</td>
                <td>" . $row['reg_date'] . "</td>
                <td>
                    <a href='form_edit_user.php?id=" . $row['id'] . "'>Edit</a> | 
                    <a href='delete_user.php?id=" . $row['id'] . "' onclick=\"return confirm('Are you sure to delete this account?')\">Delete</a>
                </td>
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
