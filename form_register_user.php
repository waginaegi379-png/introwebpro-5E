<!DOCTYPE html>
<html>
<head>
    <title>Register User</title>
</head>
<body>
    <h2>Form Registrasi User</h2>
    <form action="user_create.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Konfirmasi Password:</label><br>
        <input type="password" name="confirm_password" required><br><br>

        <label>Fullname:</label><br>
        <input type="text" name="fullname" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
