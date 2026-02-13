<?php
session_start();
$_SESSION = array();
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-3600, '/');
}
session_destroy();

header("Content-Type: application/json");
echo json_encode([
    "status" => "success",
    "message" => "You have been logged out successfully.",
    "redirect" => "/index.php"
]);
exit;
?>