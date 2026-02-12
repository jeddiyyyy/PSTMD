<?php
session_start();
include "../../config/config.php";

header('Content-Type: application/json');

$response = [
    "status" => "error",
    "message" => ""
];

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

            $response["status"] = "success";
            $response["message"] = "Login successful!";
            $response["redirect"] = "assets/php/franchise.php";

        } else {
            $response["message"] = "Incorrect password";
        }
    } else {
        $response["message"] = "User not found";
    }

    $stmt->close();
}

echo json_encode($response);
exit;
