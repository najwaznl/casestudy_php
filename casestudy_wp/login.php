<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #C38EC7;
}

h2 {
    text-align: center;
    margin-top: 50px;
    color: #333;
}

form {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #B041FF;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"],
select,
input[type="submit"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4caf50;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

.register-link {
    text-align: center;
    margin-top: 20px;
}

.register-link a {
    color: #FF0000;
    text-decoration: none;
}

.register-link a:hover {
    text-decoration: underline;
}

</style>

<body>
    <h2>--Login--</h2>
    <form action="db.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <!-- <label for="position">Position:</label>
        <select id="position" name="position" required>
            <option value="admin">Admin</option>
            <option value="participant">Participant</option>
        </select><br><br><br> -->

        <input type="submit" value="Login">
    </form>
    <div class="register-link">
        Not registered yet? <a href="register.php">Register here</a>
    </div>
</body>
</html>


