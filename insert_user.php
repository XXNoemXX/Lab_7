<?php
require_once 'database.php';

$matric = $_POST['matric'];
$name = $_POST['name'];
$password = $_POST['password'];
$role = $_POST['role'];

if (empty($matric) || empty($name) || empty($password) || empty($role)) {
    die("All fields are required.");
}

$hashed_password = password_hash($password, PASSWORD_BCRYPT);

$stmt = $conn->prepare("INSERT INTO users (matric, name, password, role) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $matric, $name, $hashed_password, $role);

if ($stmt->execute()) {
    echo "User created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

header("Location: read_users.php");
exit();
?>