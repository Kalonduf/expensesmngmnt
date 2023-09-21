<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <style>
        /* Add your CSS styles here */
        .container {
            width: 300px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="loginEmail">Email:</label>
            <input type="email" id="loginEmail" name="loginEmail" required>
        </div>
        <div class="form-group">
            <label for="loginPassword">Password:</label>
            <input type="password" id="loginPassword" name="loginPassword" required>
        </div>
    <p>Dont have an account?<a href="register.php">Create an account</a>
    </p>

        <button type="submit">Login</button>
    </form>

</div>
</body>
</html>
