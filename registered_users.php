<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'db_connect.php';

// Query untuk mengambil data dari tabel users
$result = $conn->query("SELECT username, email, created_at FROM users");

if ($result->num_rows > 0) {
    echo "<h1>Registered Users</h1>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>Username: " . $row['username'] . " - Email: " . $row['email'] . " - Registered at: " . $row['created_at'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No registered users.";
}

$conn->close();
?>



</body>
</html>