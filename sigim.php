<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In & Sign Up</title>
    <link rel="stylesheet" href="style.css"> <!-- External CSS link -->
    <style>
        body {
            margin: 0;
        }
        h1 {
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            text-align: center;
        }
        .awal {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 400px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        input {
            width: 94%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .toggle {
            text-align: center;
            margin-top: 20px;
        }
        .toggle a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1><a href="web2.php">BACK TO BERANDA</a></h1>
    <div class="awal">
    <div class="container">
        <h2 id="form-title">Sign In</h2>
        <form id="auth-form" action="db_connect.php" method="POST">
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit">Sign In</button>
        </form>
        <div class="toggle">
            <p id="toggle-text">Don't have an account? <a href="#" id="toggle-link">Sign Up</a></p>
            <p class="signup">Want to see who logged in? <a href="blog.php">Check here</a></p>

        </div>
        
    </div>
    </div>
    <script>
        const formTitle = document.getElementById("form-title");
        const authForm = document.getElementById("auth-form");
        const toggleText = document.getElementById("toggle-text");
        const toggleLink = document.getElementById("toggle-link");

        let isSignUp = false;

        toggleLink.addEventListener("click", () => {
            isSignUp = !isSignUp;
            if (isSignUp) {
                formTitle.textContent = "Sign Up";
                authForm.action = "signup.php"; // Change action for signup
                toggleText.innerHTML = 'Already have an account? <a href="#" id="toggle-link">Sign In</a>';
            } else {
                formTitle.textContent = "Sign In";
                authForm.action = "signin.php"; // Change action for signin
                toggleText.innerHTML = 'Don\'t have an account? <a href="#" id="toggle-link">Sign Up</a>';
            }
        });
    </script>
</body>
</html>
