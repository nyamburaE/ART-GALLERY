<?php
session_start(); // Start session to store user data

include 'tbladmin.php'; // Include the file containing database connection details

$success = 0;
$unsuccess = 0;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve username and password from the login form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if the user exists in the database
    $sql = "SELECT * FROM tbladmin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // If user exists, redirect to success page
        $_SESSION['username'] = $username; // Store username in session for future use
        header("Location: dashboard.php"); // Redirect to dashboard or success page
        exit();
    } else {
        // If user doesn't exist, display error message
        $error_message = "Invalid username or password. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>body {
            background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: "Open Sans", sans-serif;
            color: #333333;
        }

        .box-form {
            margin: 0 auto;
            width: 80%;
            background: #FFFFFF;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: row;
            align-items: stretch;
            justify-content: space-between;
            box-shadow: 0 0 20px 6px #090b6f85;
            animation: slideIn 1s forwards;
        }

        @media (max-width: 980px) {
            .box-form {
                flex-flow: wrap;
                text-align: center;
                align-content: center;
                align-items: center;
            }
        }

        .box-form div {
            height: auto;
        }

        .box-form .left {
            color: #FFFFFF;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url("https://i.pinimg.com/736x/5d/73/ea/5d73eaabb25e3805de1f8cdea7df4a42--tumblr-backgrounds-iphone-phone-wallpapers-iphone-wallaper-tumblr.jpg");
            overflow: hidden;
        }

        .box-form .left .overlay {
            padding: 30px;
            width: 100%;
            height: 100%;
            background: #5961f9ad;
            overflow: hidden;
            box-sizing: border-box;
        }

        .box-form .left .overlay h1 {
            font-size: 10vmax;
            line-height: 1;
            font-weight: 900;
            margin-top: 40px;
            margin-bottom: 20px;
            animation: slideInLeft 1s forwards;
        }

        .box-form .left .overlay span p {
            margin-top: 30px;
            font-weight: 900;
            animation: slideInLeft 1s forwards;
        }

        .box-form .left .overlay span a {
            background: #3b5998;
            color: #FFFFFF;
            margin-top: 10px;
            padding: 14px 50px;
            border-radius: 100px;
            display: inline-block;
            box-shadow: 0 3px 6px 1px #042d4657;
            animation: slideInLeft 1s forwards;
        }

        .box-form .left .overlay span a:last-child {
            background: #1dcaff;
            margin-left: 30px;
        }

        .box-form .right {
            padding: 40px;
            overflow: hidden;
        }

        @media (max-width: 980px) {
            .box-form .right {
                width: 100%;
            }
        }

        .box-form .right h5 {
            font-size: 6vmax;
            line-height: 0;
            animation: slideInRight 1s forwards;
        }

        .box-form .right p {
            font-size: 14px;
            color: #B0B3B9;
            animation: slideInRight 1s forwards;
        }

        .box-form .right .inputs {
            overflow: hidden;
            animation: slideInRight 1s forwards;
        }

        .box-form .right input {
            width: 100%;
            padding: 10px;
            margin-top: 25px;
            font-size: 16px;
            border: none;
            outline: none;
            border-bottom: 2px solid #B0B3B9;
            animation: slideInRight 1s forwards;
        }

        .box-form .right .remember-me--forget-password {
            display: flex;
            justify-content: space-between;
            align-items: center;
            animation: slideInRight 1s forwards;
        }

        .box-form .right .remember-me--forget-password input {
            margin: 0;
            margin-right: 7px;
            width: auto;
        }

        .box-form .right button {
            float: right;
            color: #fff;
            font-size: 16px;
            padding: 12px 35px;
            border-radius: 50px;
            display: inline-block;
            border: 0;
            outline: 0;
            box-shadow: 0px 4px 20px 0px #49c628a6;
            background-image: linear-gradient(135deg, #70F570 10%, #49C628 100%);
            transition: all 0.3s ease;
            animation: slideInRight 1s forwards;
        }

        label {
            display: block;
            position: relative;
            margin-left: 30px;
        }

        label::before {
            content: ' \f00c';
            position: absolute;
            font-family: FontAwesome;
            background: transparent;
            border: 3px solid #70F570;
            border-radius: 4px;
            color: transparent;
            left: -30px;
            transition: all 0.2s linear;
        }

        label:hover::before {
            font-family: FontAwesome;
            content: ' \f00c';
            color: #fff;
            cursor: pointer;
            background: #70F570;
        }

        label:hover::before .text-checkbox {
            background: #70F570;
        }

        label span.text-checkbox {
            display: inline-block;
            height: auto;
            position: relative;
            cursor: pointer;
            transition: all 0.2s linear;
        }

        label input[type="checkbox"] {
            display: none;
        }

        .box-form .right button:hover {
            transform: translateY(-2px);
            box-shadow: 0px 6px 20px 0px #49c628a6;
        }

        .box-form .right button:active {
            transform: translateY(0);
            box-shadow: 0px 2px 10px 0px #49c628a6;
        }

        .box-form .right button:focus {
            outline: none;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
    <div class="box-form">
    <div class="left">
        <div class="overlay">
            <h1>Hello World.</h1>
            <p>Welcome to Zuri Art Gallery.</p>
            <p><h3>Karibu Nyumbani</h3></p>
        </div>
    </div>

        <div class="right">
            <h4>Login</h4>
            <p>Don't have an account? <a href="Register.php">Create one through here</a> Takes less than a minute.</p>
            <div class="inputs">
                <input type="text" id="username" placeholder="Enter Username" required>
                <br>
                <input type="password" id="password" placeholder="Input Password" required pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}">
                <button onclick="togglePasswordVisibility()" id="togglePassword">
                    <i class="fas fa-eye-slash" id="eyeIcon"></i> Show Password
                </button>
            </div>

            <!-- Add a <label> element around the checkbox and associated text -->
            <label for="remember-me">
                <input type="checkbox" id="remember-me" name="remember-me" checked>
                Remember Me
            </label>

            <p><a href="forgot_password.php">Forgot password?</a></p>

            <button>Login</button>
        </div>
    </div>
    </form>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('password');
            var toggleButton = document.getElementById('togglePassword');
            var eyeIcon = document.getElementById('eyeIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleButton.innerHTML = 'Hide Password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                toggleButton.innerHTML = 'Show Password';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        }

        document.getElementById("password").addEventListener("input", function (event) {
            if (!passwordPattern.test(event.target.value)) {
                event.preventDefault();
                document.getElementById('passwordError').innerText = "Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, one digit, and one special character (!@#$%^&*()_+).";
            } else {
                clearErrorMessage('passwordError');
            }
        });

        function clearErrorMessage(errorId) {
            document.getElementById(errorId).innerText = '';
        }

        // Make sure to add the passwordPattern variable here before the addEventListener
        const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}$/;
    </script>
</body>
</html>