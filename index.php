<?php
session_start();
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password are correct
    if ($username === 'admin' && $password === '1234') {
        $_SESSION['loggedin'] = true;
        header("Location: welcome.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER LOGIN</title>
    <!-- Google Font: Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Background Styling */
        html {
            background: 
                linear-gradient(135deg, rgba(30, 144, 255, 0.6) 25%, rgba(0, 191, 255, 0.6) 25%, rgba(0, 191, 255, 0.6) 50%, rgba(30, 144, 255, 0.6) 50%, rgba(30, 144, 255, 0.6) 75%, rgba(0, 191, 255, 0.6) 75%, rgba(0, 191, 255, 0.6) 100%),
                linear-gradient(-135deg, rgba(30, 144, 255, 0.6) 25%, rgba(0, 191, 255, 0.6) 25%, rgba(0, 191, 255, 0.6) 50%, rgba(30, 144, 255, 0.6) 50%, rgba(30, 144, 255, 0.6) 75%, rgba(0, 191, 255, 0.6) 75%, rgba(0, 191, 255, 0.6) 100%);
            background-color: #1E90FF; /* Fallback color */
            background-blend-mode: overlay;
            background-size: 200% 200%;
            animation: backgroundAnimation 15s ease infinite;
            min-height: 100vh; /* Ensure full viewport height */
        }

        /* Background Animation for Dynamic Effect */
        @keyframes backgroundAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Body Styling */
        body {
            font-family: 'Montserrat', sans-serif; /* Apply Montserrat Font */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }

        /* Login Container */
        .login-container {
            background-color: #B0E0E6; /* PowderBlue */
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            width: 350px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .login-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
        }

        .login-container h2 {
            margin-bottom: 25px;
            text-align: center;
            font-size: 1.8rem;
            font-weight: 600;
            color: #1E90FF; /* DodgerBlue */
        }

        /* Form Input Styles */
        .login-container input[type="text"], 
        .login-container input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 2px solid #87CEFA; /* LightSkyBlue */
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .login-container input[type="text"]:focus, 
        .login-container input[type="password"]:focus {
            border-color: #1E90FF; /* DodgerBlue */
            box-shadow: 0 0 5px rgba(30, 144, 255, 0.5);
            outline: none;
        }

        /* Submit Button */
        .login-container input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #00BFFF; /* DeepSkyBlue */
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .login-container input[type="submit"]:hover {
            background-color: #00BFFF; /* DeepSkyBlue */
            transform: scale(1.02);
        }

        /* Error Message */
        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 400px) {
            .login-container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>USER LOGIN</h2>
        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="post" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>
