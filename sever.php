<?php
// Start the session
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectniit";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error_message = "";

// Registration validation code
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $error_message = "All fields are required!";
    } elseif ($password !== $confirm_password) {
        $error_message = "Passwords do not match!";
    } else {
        // Hashing the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $hashed_passworded = password_hash($confirm_password, PASSWORD_DEFAULT);

        // Check if username or email already exists
        $sql = "SELECT id FROM users WHERE email=? OR username=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error_message = "User with this email or username already exists!";
        } else {
            // Register new user
            $sql = "INSERT INTO users (username, email, password, Cpassword) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $username, $email, $hashed_password, $hashed_passworded);

            if ($stmt->execute()) {
                header("Location: login.php");  // Redirect to login after successful registration
                exit();
            } else {
                $error_message = "Error: " . $stmt->error;
            }
        }
    }
}


// Login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Email and password are required";
        header("Location: login.php");
        exit();
    }
    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['error'] = "Incorrect Password";
        }
    } else {
        $_SESSION['error'] = "User not found";
    }
    header("location: login.php");
    exit();
}

$conn->close();
