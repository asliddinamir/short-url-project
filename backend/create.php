<?php
header("Content-Type: application/json");
include "db.php";

// Get JSON input
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["url"]) || empty($data["url"])) {
    echo json_encode(["error" => "URL cannot be empty"]);
    exit;
}

$long_url = $conn->real_escape_string($data["url"]);

// Generate random 6-character short code
$code = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"), 0, 6);

// Save into database
$sql = "INSERT INTO short_urls (code, long_url) VALUES ('$code', '$long_url')";
$conn->query($sql);

// Actual link for redirect (local)
$real_url = "http://localhost/short-url-project/backend/redirect.php?c=$code";

// Fake short domain for display
$display_url = "https://short.me/" . $code;

// Return both
echo json_encode([
    "short_url" => $real_url,
    "display_url" => $display_url
]);