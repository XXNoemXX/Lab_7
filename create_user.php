<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #8e44ad, #3498db);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.85);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .form-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1), transparent);
            animation: rotate 6s linear infinite;
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        h3.create-user-heading {
            font-size: 28px;
            color: #8e44ad;
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
            font-weight: bold;
            position: relative;
            z-index: 1;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: calc(100% - 24px);
            padding: 14px;
            margin-bottom: 25px;
            border: 2px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
            position: relative;
            z-index: 1;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        select:focus {
            border-color: #8e44ad;
        }

        input[type="submit"] {
            background-color: #8e44ad;
            color: #fff;
            padding: 14px 28px;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            position: relative;
            z-index: 1;
        }

        input[type="submit"]:hover {
            background-color: #732d91;
            transform: translateY(-2px);
        }

        input[type="submit"]:active {
            background-color: #5e2373;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h3 class="create-user-heading">Create User</h3>
        <form action="insert_user.php" method="POST">
            <label for="matric">Matric:</label>
            <input type="text" name="matric" required><br>
            <label for="name">Name:</label>
            <input type="text" name="name" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br>
            <label for="role">Role:</label>
            <select name="role" required>
                <option value="">Please select</option>
                <option value="student">Student</option>
                <option value="lecturer">Lecturer</option>
            </select><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
