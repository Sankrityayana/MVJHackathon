<?php include "./config.php" ?>
<?php
    if(isset($_POST['submit'])){
        //Get details from user
        $username = $_POST['username'];
        $useremail = $_POST['useremail'];
        $userpass = $_POST['userpass'];
        $confpass = $_POST['confirm-password'];
        $userphone = $_POST['userphone'];
        $usertype = "user";

        if($userpass == $confpass) {
        $insert = $conn->prepare("INSERT INTO users(username, useremail, userpass, usertype, userphone) VALUES (:username, :useremail, :userpass, :usertype, :userphone)");
        $insert->execute([
            ":username"=>$username,
            ":useremail"=>$useremail,
            ":userpass"=>password_hash($userpass, PASSWORD_DEFAULT),
            ":usertype"=>$usertype,
            ":userphone"=>$userphone,
        ]);
        echo "<script>alert('Account Created Successfully')</script>";
        } else {
            echo "<script>alert('Password Doesnt Match')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifeline Shield | SignUp</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        .body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #4b9fd1, #1e7bb8);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            margin: 0;
        }

        .auth-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 420px;
            padding: 40px;
            text-align: center;
        }

        .auth-form h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .auth-form label {
            display: block;
            font-size: 14px;
            color: #555;
            margin-bottom: 8px;
            text-align: left;
        }

        .auth-form input {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
            background-color: #f7f7f7;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }

        .auth-form input:focus {
            border-color: #1e7bb8;
            background-color: #e6f2ff;
            outline: none;
        }

        .auth-form button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            background-color: #1e7bb8;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .auth-form button:hover {
            background-color: #4b9fd1;
        }

        .auth-form a {
            font-size: 14px;
            color: #1e7bb8;
            text-decoration: none;
        }

        .auth-form a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
            display: none;
        }

        @media (max-width: 500px) {
            .auth-container {
                padding: 25px;
            }

            .auth-form h2 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <?php include "./components/header.php" ?>
    <div class="body">
    <div class="auth-container">
        <form class="auth-form" action="./signup.php" method="POST">
            <h2>Create an Account</h2>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>

            <label for="useremail">Email</label>
            <input type="email" id="email" name="useremail" placeholder="Enter your email" required>

            <label for="userpass">Password</label>
            <input type="password" id="password" name="userpass" placeholder="Enter your password" required
                title="Password must be at least 8 characters long and include one uppercase letter, one lowercase letter, one number, and one special character.">

            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required
                title="Passwords must match the criteria.">

            <label for="userphone">Phone Number</label>
            <input type="tel" id="phone" name="userphone" placeholder="Enter your phone number" required
                pattern="^\d{10}$" title="Phone number must be 10 digits.">

            <button type="submit" name="submit">Sign Up</button><br> <br>
            <p><a href="./login.php">Back to Login</a></p>
        </form>
    </div>
    </div>
    <?php include "./components/footer.php" ?>
</body>
</html>