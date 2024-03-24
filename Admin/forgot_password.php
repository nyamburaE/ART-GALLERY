<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #237e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient a6d5,15s ease infinite;
            height: 100vh;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 10 #23d0% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 05ab);
           ;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding background: 20px;
            width: 400px;
            max-width: 100%;
            position: relative;
            overflow: hidden;
        }

        .container h1 {-size: 400%
            text-align: center;
            margin-bottom: 20px;
        }

        .input-box {
            margin-bottom: 20px;
        }

        .input-box span {
 400%;
            animation: gradient 15s ease infinite;
            height: 100v            display: block;
            margin-bottom: 5px;
        }

        .input-box input {
            width: 70%;
h;
        }

        @keyframes gradient            padding: 10px;
            border: 1px solid #ddd;
            border-radius: {
            0% {
                background- 3px;
            font-size: 16px;
        }

        .button input {position: 0% 50%;

            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
            max-width: 100%;
            position: relative;
            overflow: hidden;
        }

        .container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-box {
            margin-bottom: 20px;
        }

        .input-box span {
            display: block;
            margin-bottom: 5px;
        }

        .input-box input {
            width: 70%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
            font-size: 16px;
        }

        .button input {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .button input:hover {
            background-color: #0069d9;
        }

        .password-wrap {
            position: relative;
        }

        .password-wrap button {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            background-color: transparent;
            border: none;
            font-size: 18px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .password-wrap button:hover {
            color: #007bff;
        }

        .password-wrap input {
            padding-right: 40px;
        }

        .container.show {
            animation: hop-in 0.5s ease forwards;
        }

        @keyframes hop-in {
            0% {
                transform: translateY(-50px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .back-to-login {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .back-to-login a {
            color: #007bff;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        .back-to-login a:hover {
            color: #0069d9;
        }

        .message-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .message {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            font-size: 18px;
            text-align: center;
            color: #007bff;
            display: none;
        }

        .message.show {
            display: block;
        }

        .message.error {
            color: #ff0000;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>

<?php

// Add the following code at the beginning of the file
$success = isset($_GET['success']) ? $_GET['success'] : false;
$error = isset($_GET['error']) ? $_GET['error'] : false;

?>

<div class="container">
    <h1>Login</h1>
    <?php if ($success): ?>
        <div class="message-container">
            <div class="message show">
                Password has been successfully changed.
            </div>
        </div>
    <?php endif; ?>

    <?php if ($error): ?>
        <div class="message-container">
            <div class="message show error">
                <?php echo htmlspecialchars($error); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="input-box">
        <span class="details">Email</span>
        <input type="email" name="email" placeholder="Enter your email" required>
    </div>
    <form action="reset_password.php" method="post" class="reset-form hide">
        <div class="input-box">
            <span class="details">New Password</span>
            <div class="password-wrap">
                <input type="password" id="password" name="password" placeholder="Enter your new password"
                       required>
                <button type="button"
                        onclick="togglePasswordVisibility('password')"
                        id="togglePassword-password">
                    <i class="fas fa-eye-slash"></i>
                </button>
            </div>
        </div>
        <div class="input-box">
            <span class="details">Confirm Password</span>
            <div class="password-wrap">
                <input type="password" id="confirm_password"
                       name="confirm_password"
                       placeholder="Confirm your new password"
                       required>
                <button type="button"
                        onclick="togglePasswordVisibility('confirm_password')"
                        id="togglePassword-confirm_password">
                    <i class="fas fa-eye-slash"></i>
                </button>
            </div>
        </div>
        <div class="button">
            <input type="submit" value="Submit" name="submit">
        </div>
    </form>
    <div class="back-to-login">
        <p><a href="Login.php">Click me </a> to go back to the Login Page</p>
    </div>
</div>

<script>
    function togglePasswordVisibility(passwordInputId) {
        const passwordInput = document.querySelector('#' + passwordInputId);
        const toggleButton = document.querySelector('#togglePassword-' + passwordInputId);
        const icon = toggleButton.querySelector('i');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    }
</script>

</body>
</html>