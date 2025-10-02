<h2>Add New User Account</h2>
<form action="create_account.php" method="post">
    Username: <br><input type="text" name="username" placeholder="your email" required><br>
    Password: <br><input type="password" name="password" minlength="8" placeholder="minimal 8 character" required><br>
    Fullname: <br><input type="text" name="fullname" placeholder="your fullname" required><br>
    Role:
    <select name="role" required>
        <option value="">-- choose your role --</option>
        <option value="admin">Admin</option>
        <option value="operator">Operator</option>
        <option value="visitor">Visitor</option>
    </select>
    <br><br>
    <input type="submit" value="Add user">
</form>
