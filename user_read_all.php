<?php
// Koneksi ke database
include 'connect.php';

echo "<h2>Daftar User</h2>";

// Query ambil semua user
$sql = "SELECT * FROM users ORDER BY id ASC";
$result = $conn->query($sql);

// Tombol tambah user
echo "<a href='form_register_user.php'>+ Add User</a><br><br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='8' cellspacing='0'>
            <tr style='background:#f2f2f2;'>
                <th>ID</th>
                <th>Username</th>
                <th>Fullname</th>
                <th>Password</th>
                <th>Registered</th>
                <th>Action</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["username"]."</td>
                <td>".$row["fullname"]."</td>
                <td>******</td> <!-- password ditampilkan pendek -->
                <td>".$row["reg_date"]."</td>
                <td>
                    <a href='form_update_user.php?id=".$row["id"]."'>Edit</a> | 
                    <a href='user_delete.php?id=".$row["id"]."' 
                       onclick=\"return confirm('Yakin ingin hapus user ini?')\">Delete</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Belum ada user yang terdaftar.";
}

// Tutup koneksi
$conn->close();
?>
