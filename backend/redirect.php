<?php
include "db.php";

if (!isset($_GET["c"])) {
    echo "Invalid URL";
    exit;
}

$code = $conn->real_escape_string($_GET["c"]);

// Find the original URL in the database
$sql = "SELECT long_url FROM short_urls WHERE code='$code' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "URL not found";
    exit;
}

$row = $result->fetch_assoc();
$long_url = $row["long_url"];

// Redirect to the original URL
header("Location: $long_url");
exit;
?>