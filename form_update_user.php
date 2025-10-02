<!DOCTYPE html>
<html>
<head>
    <title>Update Password</title>
</head>
<body>
    <h2>Form Ubah Password</h2>
    <form action="user_update.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password Baru:</label><br>
        <input type="password" name="new_password" required><br><br>

        <label>Konfirmasi Password Baru:</label><br>
        <input type="password" name="confirm_password" required><br><br>

        <input type="submit" value="Update Password">
    </form>
</body>
</html>
