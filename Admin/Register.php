<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('dbconnection.php');// Include the correct file for database connection

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Prepare form data
    $fullname = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password']; // Rename password variable to avoid conflict


    // SQL statement to insert data into admin table
    $sql = "INSERT INTO admin (fullname, username, phonenumber, email, password)
            VALUES ('$fullname', '$username', '$phonenumber', '$email', '$password')";

    // Execute SQL statement
    $result = mysqli_query($con, $sql);
    if ($result) {
        // Redirect to registration successful page
        header("Location: registration_successful.php");
        exit(); // Add exit() to prevent further execution
    } else {
        die(mysqli_error($connect));
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    
    <title>Registration Form</title>
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        .container {
            max-width: 700px;
            width: 100%;
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        }

        .container .title {
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }

        .container .title::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            border-radius: 5px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        .content form .user-details {display: flex;
           flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }

        form .user-details .input-box {
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }

        form .input-box span.details {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .user-details .input-box input {
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }

        .user-details .input-box input:focus,
        .user-details .input-box input:valid {
            border-color: #9b59b6;
        }

        form .gender-details .gender-title {font-size: 20px;
            font-weight: 500;
        }

        form .category {
            display: flex;
            width: 80%;
            margin: 14px 0;
            justify-content: space-between;
        }

        form .category label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        form .category label .dot {
            height: 18px;
            width: 18px;
            border-radius: 50%;
            margin-right: 10px;
            background: #d9d9d9;
            border: 5px solid transparent;
            transition: all 0.3s ease;
        }

        #dot-1:checked ~ .category label .one,
        #dot-2:checked ~ .category label .two,
        #dot-3:checked ~ .category label .three {
            background: #9b59b6;
            border-color: #d9d9d9;
        }

        form input[type="radio"] {
            display: none;
        }

        form .button {
            height: 45px;
            margin: 35px 0;
        }

        form .button input {
            height: 100%;
            width: 100%;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        form .button input:hover {
            background: linear-gradient(-135deg, #71b7e6, #9b59b6);
        }

        @media (max-width: 584px) {
            .container {
              max-width: 100%;
            }

            form .user-details .input-box {
                margin-bottom: 15px;
                width: 100%;
            }

            form .category {
                width: 100%;
            }

            .content form .user-details {
                max-height: 300px;
                overflow-y: scroll;
            }

            .user-details::-webkit-scrollbar {
                width: 5px;
            }
        }

        @media (max-width: 459px) {
            .container .content .category {
                flex-direction: column;
            }
        }

    

        .password-toggler {
            display: inline-flex;
            align-items: center;
            margin-left: 10px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
        }

        .password-toggler i {
            margin-right: 5px;
        }

        .password-toggler span {
            text-transform: capitalize;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    <div class="title">Registration</div>
    <div class="content">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="user-details">
                <div class="input-box">
                    <label for="name">Name:</label>
            <input type="text" id="name" name="name" required pattern="[A-Za-z]+\s[A-Za-z]+" placeholder="Enter full names" title="Please enter at least two names separated by a space">
            <span id="nameError" class="error-message"></span><br>
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="username" placeholder="Enter your username" required>
                </div>
                <div class="input-box">
                    <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Include an @gmail.com">
            <span id="emailError" class="error-message"></span><br>
                </div>
                <div class="input-box">
                    <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phonenumber" required pattern="(07)[0-9]{8}" placeholder="Enter Phone Number" title="Please enter a valid Kenyan phone number starting with '07' followed by 8 digits">
            <span id="phoneError" class="error-message"></span><br>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" id="password" name="password" placeholder="Enter an 8 character password" required pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}" title="Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, one digit, and one special character (!@#$%^&*()_+)">
                    <div class="password-toggler" onclick="togglePasswordVisibility('password')">
                        <i class="fas fa-eye-slash"></i>
                        <span>Show Password</span>
                    </div>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
                    <div class="password-toggler" onclick="togglePasswordVisibility('confirm-password')">
                        <i class="fas fa-eye-slash"></i>
                        <span>Show Password</span>
                    </div>
                </div>
            </div>

            <div class="button">
                <input type="submit" value="Register">
            </div>
            <p>You do have an account? <a href="Login.php">Click here to log in </a> and join the Art Community.</p>
        </form>
    </div>
</div>

<script>
    var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}$/;
            if (!passwordPattern.test(password)) {
                event.preventDefault();
                showErrorMessage('Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, one digit, and one special character (!@#$%^&*()_+).', 'passwordError');
            } else {
                clearErrorMessage('passwordError');
            }

    function togglePasswordVisibility(passwordId) {
        const passwordInput = document.getElementById(passwordId);
        const passwordToggle = document.querySelector(`#${passwordId} + .password-toggler`);
        const passwordType = passwordInput.getAttribute('type');

        if (passwordType === 'password') {
            passwordInput.setAttribute('type', 'text');
            passwordToggle.querySelector('i').classList.replace('fa-eye-slash', 'fa-eye');
            passwordToggle.querySelector('span').textContent = 'Hide Password';
        } else {
            passwordInput.setAttribute('type', 'password');
            passwordToggle.querySelector('i').classList.replace('fa-eye', 'fa-eye-slash');
            passwordToggle.querySelector('span').textContent = 'Show Password';
        }
    }



</script>
<script src="https://kit.fontawesome.com/yourcode.js"></script>
</body>
</html>
