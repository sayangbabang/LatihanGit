<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "my data base2";
    
    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Jalankan query
    $sql = "SELECT id, nama, email FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Membuat tabel HTML dengan border
        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr><th>ID</th><th>Nama</th><th>Email</th></tr>";
        
        // Menampilkan data dalam baris tabel
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"]. "</td>
                    <td>" . $row["nama"]. "</td>
                    <td>" . $row["email"]. "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    // Tutup koneksi
    $conn->close()
    ?>
</body>
</html>