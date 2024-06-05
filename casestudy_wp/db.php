<?php
session_start();

$servername = "localhost";
$database = "dbregistration";
$username = "root";
$password = "";

$connect = new mysqli($servername, $username, $password, $database);

if ($connect->connect_error) {
    die("Connection Error!: " . $connect->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username'], $_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $connect->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];

            switch ($row['role']) {
                case 'admin':
                    header("Location: admin.php");
                    break;
                case 'participant':
                    header("Location: participant_dashboard.php");
                    break;
                default:
                    echo "Invalid role!";
            }
            exit();
        } else {
            echo "Invalid username or password.";
        }

        $stmt->close();
    }
}

$connect->close();
?>
