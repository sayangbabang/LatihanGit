<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Alex Smith</title>
    <link rel="stylesheet" href="kontak.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">
                <div class="avatar">Y</div>
                <h1>Yogha erastyawan</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="web2.php">BERANDA</a></li>
                    <li><a href="https://maggieandrose.com/">GAME</a></li>
                    <li><a href="https://www.instagram.com/ygyaa_l/">DEVELOPER</a></li>
                    <li><a href="cons.html">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="contact-section">
            <h2>Contact</h2>
            <div class="contact-info">
                <div class="info-item">
                    <p><strong>0878-7951-2560</strong></p>
                    <p>HUBUNGI NO BERIKUT UNTUK LEBIH LANJUT.</p>
                </div>
                <div class="info-item">
                    <p><strong>address</strong></p>
                    <p>jln cijagra kecamatan lengking kota Bandung</p>
                </div>
                <div class="info-item">
                    <p><strong><a href="mailto:email@example.com">erastyawanyogha@gmail.com</a></strong></p>
                    <p>HUBUNGI EMAIL TERSEBUT</p>
                </div>
            </div>
            <div class="contact-form">
                <h3>How Can I Help You?</h3>
                <form action="#" method="POST">
                    <input type="text" name="name" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <textarea name="message" placeholder="Message" required></textarea>
                    <button type="submit">Send message</button>
                </form>
            </div>
        </section>
    </main>
    <?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mywebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into database
    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

</body>
</html>