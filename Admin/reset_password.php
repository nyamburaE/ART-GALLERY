<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Password Reset Success</title>
    <style>
        body {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #237e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
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

        .container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .container p {
            text-align: center;
            margin-bottom: 20px;
        }

        .message-container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }

        .message {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            font-size: 18px;
            text-align: center;
            color: #007bff;
            animation: hop-up 0.5s ease forwards;
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        @keyframes hop-up {
            0% {
                transform: translate(-50%, 100%);
                opacity: 0;
            }
            100% {
                transform: translate(-50%, -50%);
                opacity: 1;
            }
        }

        .message.show {
            display: block;
        }
    </style>
</head>
<body>



<div class="message-container">
    <div class="message show">
        <h3>You have successfully changed your password.</h3>
    </div>
</div>

<script>
    // Redirect to the "Login" page after 2 seconds
    setTimeout(function() {
        window.location.href = "Login.php";
    }, 2000); // 2000 milliseconds = 2 seconds
</script>

</body>
</html>
