<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .link {
            text-align: center;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Register</h2>
        <form id="register-form" action="register-action.php" method="POST">
            <input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <input type="password" name="confirm-password" id="confirm-password" placeholder="Konfirmasi Password" required>
            <button type="submit" class="btn">Daftar</button>
        </form>
        <a href="login.html" class="link">Sudah punya akun? Login</a>
    </div>

</body>

</html>