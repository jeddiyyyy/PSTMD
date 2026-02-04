<?php

include "config/config.php";

$loginStatus  = "";
$loginMessage = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            $loginStatus = "success";
        } else {
            $loginStatus  = "error";
            $loginMessage = "Incorrect password";
        }
    } else {
        $loginStatus  = "error";
        $loginMessage = "User not found";
    }

    $stmt->close();
}
