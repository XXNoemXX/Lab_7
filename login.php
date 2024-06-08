<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom right, #1abc9c, #2ecc71);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            max-width: 350px;
            width: 100%;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        h2 {
            font-size: 26px;
            color: #2ecc71;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 24px);
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #2ecc71;
        }

        .login-button {
            background-color: #1abc9c;
            color: #fff;
            padding: 12px 25px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .login-button:hover {
            background-color: #16a085;
            transform: translateY(-2px);
        }

        .login-button:active {
            background-color: #0e7e63;
            transform: translateY(0);
        }

        .register-link {
            display: inline-block;
            background-color: #e74c3c;
            color: #fff;
            padding: 10px 15px;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            text-decoration: none;
            margin-top: 15px;
        }

        .register-link:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
        }

        .register-link:active {
            background-color: #962d22;
            transform: translateY(0);
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php
        if (isset($_GET['error'])) {
            echo "<p class='error-message'>" . htmlspecialchars($_GET['error']) . "</p>";
        }
        ?>
        <form action="authenticate.php" method="POST">
            <label for="matric">Matric:</label>
            <input type="text" name="matric" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br>
            <input type="submit" class="login-button" value="Login">
        </form>
        <a href="create_user.php" class="register-link">Register</a>
    </div>
</body>
</html>
