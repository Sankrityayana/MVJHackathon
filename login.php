<?php include "./config.php" ?>
<?php 
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $useremail = $_POST['useremail'];
        $password = $_POST['password'];

        $fetchall = $conn->query("SELECT * FROM users where username = '$username'");
        $fetchall->execute();
        $fetchdata = $fetchall->fetch(PDO::FETCH_ASSOC);

        if($fetchdata) {
            if(password_verify($password, $fetchdata['userpass'])) {
                echo "<script>alert('Login Successful')</script>";
                $_SESSION['username'] = $fetchdata['username'];
                $_SESSION['usertype'] = $fetchdata['usertype'];
                $_SESSION['userid'] = $fetchdata['uid'];
                $_SESSION['useremail'] = $fetchdata['usermail'];
                $_SESSION['userid'] = $fetchdata['userid'];
                header("location: index.php");
            } else {
                echo "<script>alert('Wrong Password')</script>";
            }
        } else {
        echo "<script>alert('Wrong Email Id')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        .body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #3a8ec1, #006bb3);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .auth-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 420px;
            padding: 40px;
            position: relative;
            transition: all 0.3s ease;
        }

        .auth-container:hover {
            transform: scale(1.05);
        }

        .auth-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .auth-form h2 {
            text-align: center;
            font-size: 26px;
            color: #333;
            margin-bottom: 20px;
        }

        .auth-form label {
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }

        .auth-form input {
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
            width: 100%;
            background-color: #f7f7f7;
        }

        .auth-form input:focus {
            border-color: #006bb3;
            background-color: #e6f2ff;
        }

        .auth-form button {
            padding: 15px;
            width: 100%;
            background-color: #006bb3;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        .auth-form button:hover {
            background-color: #3a8ec1;
        }

        .auth-form a {
            text-align: center;
            color: #006bb3;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .auth-form a:hover {
            text-decoration: underline;
            color: #3a8ec1;
        }

        .auth-form p {
            text-align: center;
            font-size: 14px;
            color: #666;
        }

        .error-message {
            color: red;
            font-size: 14px;
            text-align: center;
            display: none;
        }

        /* Responsive Design */
        @media (max-width: 500px) {
            .auth-container {
                padding: 25px;
            }

            .auth-form h2 {
                font-size: 22px;
            }

            .auth-form input {
                font-size: 14px;
            }

            .auth-form button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <?php include "./components/header.php" ?>
    <div class="body">
    <div class="auth-container">
        <!-- Login Form -->
        <div id="loginForm" class="auth-form">
            <h2>Login</h2>
            <form action="./login.php" method="POST">
                <label for="loginUsername">Username</label>
                <input type="text" id="loginUsername" name="username" placeholder="Enter your username" required>
                <br> <br>
                <label for="loginEmail">Email</label>
                <input type="email" id="loginEmail" name="useremail" placeholder="Enter your email" required>
                <br> <br>
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" name="password" placeholder="Enter your password" required>
                <br> <br>
                <button type="submit">Login</button>
            </form>
            <label for="showSignUp" class="auth-form">Don't have an account? <a href="../pages/signup.html">Sign up</a></label>
            <input type="checkbox" id="showSignUp" style="display:none;">
        </div>
    </div>
    </div>
    <?php include "./components/footer.php" ?>
</body>
</html>