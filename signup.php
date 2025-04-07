<?php
/* Template Name: Custom Signup */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Car Garage</title>
    <style>
        /* General Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        /* Fullscreen background with dark overlay */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70') no-repeat center center/cover;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.85);
            z-index: -1;
        }

        /* Container */
        .container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        /* Speedometer-Inspired Animation */
        .speedometer {
            position: absolute;
            width: 15vw;
            height: 15vw;
            max-width: 200px;
            max-height: 200px;
            border-radius: 50%;
            border: 2px solid rgba(255, 0, 0, 0.9);
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.9);
            animation: speedGlow 2s infinite alternate;
        }

        @keyframes speedGlow {
            0% { transform: rotate(0deg); filter: blur(3px); border-color: rgba(255, 0, 0, 0.6); }
            50% { transform: rotate(90deg); filter: blur(6px); border-color: rgba(255, 0, 0, 0.8); }
            100% { transform: rotate(180deg); filter: blur(3px); border-color: rgba(255, 0, 0, 1); }
        }

        /* Signup Box */
        .signup-box {
            position: relative;
            background: rgba(0, 0, 0, 0.9);
            padding: 2.5vw;
            border-radius: 10px;
            text-align: center;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 20px rgba(255, 0, 0, 1);
            width: 70%;
            max-width: 300px;
            z-index: 1;
        }

        /* Heading */
        .signup-box h2 {
            color: white;
            margin-bottom: 15px;
            font-size: 1.5em;
        }

        /* Input Fields */
        .signup-box input {
            width: 100%;
            padding: 0.8em;
            margin: 0.4em 0;
            border: none;
            border-radius: 5px;
            outline: none;
            font-size: 0.9em;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            text-align: center;
        }

        /* Buttons */
        .buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 0.8em;
        }

        button {
            padding: 0.8em 1.5em;
            border: none;
            border-radius: 5px;
            background: linear-gradient(90deg, red, darkred, red);
            color: white;
            font-size: 0.9em;
            cursor: pointer;
            transition: 0.3s;
            width: 100%;
        }

        button:hover {
            filter: brightness(1.2);
            transform: scale(1.05);
        }

        .login-link {
            color: white;
            font-size: 0.8em;
            text-decoration: none;
            margin-top: 10px;
            display: block;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .speedometer {
                width: 18vw;
                height: 18vw;
                max-width: 180px;
                max-height: 180px;
            }

            .signup-box {
                padding: 6vw;
                width: 85%;
            }

            .signup-box h2 {
                font-size: 1.3em;
            }

            .signup-box input {
                font-size: 0.9em;
            }

            button {
                padding: 0.6em 1.2em;
            }
        }

        @media (max-width: 480px) {
            .speedometer {
                width: 20vw;
                height: 20vw;
                max-width: 150px;
                max-height: 150px;
            }

            .signup-box {
                padding: 8vw;
                width: 90%;
            }

            .signup-box h2 {
                font-size: 1.1em;
            }

            button {
                padding: 0.8em;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="speedometer"></div>
    <div class="signup-box">
        <h2>Rent a Car Signup</h2>
        <form action="<?php echo wp_registration_url(); ?>" method="post">
            <input type="text" name="user_login" placeholder="Username" required>
            <input type="email" name="user_email" placeholder="Email" required>
            <input type="password" name="user_pass" placeholder="Password" required>
            <input type="password" name="user_pass_confirm" placeholder="Confirm Password" required>
            <div class="buttons">
                <button type="submit">Start Engine</button>
            </div>
        </form>
        <a href="<?php echo home_url('/login'); ?>" class="login-link">Already have an account? Login</a>
    </div>
</div>

</body>
</html>
