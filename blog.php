<?php
// Menghubungkan ke database menggunakan PDO
$host = 'localhost';
$dbname = 'mywebsite';
$username = 'root';
$password = '';

try {
    // Membuat koneksi ke database menggunakan PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query untuk mengambil artikel dari tabel posts
    $stmtPosts = $pdo->prepare("SELECT title, content FROM posts ORDER BY created_at DESC");
    $stmtPosts->execute();
    $posts = $stmtPosts->fetchAll(PDO::FETCH_ASSOC);

    // Query untuk mengambil data pengguna dari tabel users
    $stmtUsers = $pdo->prepare("SELECT id, username, password, email, created_at FROM users");
    $stmtUsers->execute();
    $users = $stmtUsers->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .post {
            margin-bottom: 40px;
        }
        .post h2 {
            font-size: 24px;
            color: #333;
        }
        .post p {
            font-size: 16px;
            line-height: 1.6;
            color: #666;
        }
        .divider {
            height: 1px;
            background-color: #ddd;
            margin: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>DATA YANG SUDAH TERDAFTAR</h1>
    
    <?php if (count($users) > 0): ?>
        <table>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>password</th>
                <th>email</th>
                <th>created_at</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['id']); ?></td>
                    <td><?php echo htmlspecialchars($user['username']); ?></td>
                    <td><?php echo htmlspecialchars($user['password']); ?></td>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                    <td><?php echo htmlspecialchars($user['created_at']); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Tidak ada data yang tersedia.</p>
    <?php endif; ?>
</div>

</body>
</html>
