<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<?php
$servername = "localhost";
$database = "dbregistration";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password, $database);

if (!$connect) {
    die("Connection Error!:" . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'], $_POST['username'], $_POST['password'], $_POST['gender'], $_POST['department'], $_POST['race'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $department = $_POST['department'];
        $race = $_POST['race'];
        $role = 'participant';  // default role for new registrants

        $sql = "INSERT INTO users (name, username, password, gender, department, race, role) VALUES ('$name', '$username', '$password', '$gender', '$department', '$race', '$role')";

        if (mysqli_query($connect, $sql)) {
            echo "<script> alert('Account created successfully! Redirecting to the login page.'); window.location.href = 'login.php'; </script>";
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
    }
}

mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
input[type="submit"],
button[type="button"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
}

input[type="submit"],
button[type="button"] {
    background-color: #4caf50;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover,
button[type="button"]:hover {
    background-color: #45a049;
}

</style>

<body>

    <h2>--Registration--</h2>
    <form action="register.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br><br>

        <label for="department">Department:</label>
        <select id="department" name="department" required>
            <option value="JKM">JKM</option>
            <option value="JKE">JKE</option>
            <option value="JTMK">JTMK</option>
            <option value="JP">JP</option>
        </select><br><br>

        <label for="race">Race:</label>
        <select id="race" name="race" required>
            <option value="Malay">Malay</option>
            <option value="Chinese">Chinese</option>
            <option value="Indian">Indian</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label for="role">Position:</label>
        <select id="role" name="role" required>
            <option value="admin">Admin</option>
            <option value="participant">Participant</option>
        </select><br><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
