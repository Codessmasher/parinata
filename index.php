<?php 
// checking already login or not if login redirected to dashboard page

session_start();
if(isset($_SESSION['name'])){
    header("location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>

<body>

    <div class="container">
        <div class="box">
            <!------------------ Login Box --------------------->
            <form class="box-login" id="login" method="POST" action="signin.php">

                <div class="top-header">
                    <h3>Hello, Again</h3>
                    <small>We are happy to have you back.</small>
                </div>
                <div class="input-group">
                    <div class="input-field">
                        <input type="email" class="input-box" id="logEmail" name="email" required>
                        <label for="logEmail">Email address</label>
                    </div>
                    <div class="input-field">
                        <input type="password" class="input-box" id="logPassword" name="password" required>
                        <label for="logPassword">Password</label>
                        <div class="eye-area">
                            <div class="eye-box" onclick="myLogPassword()">
                                <i class="fa-regular fa-eye" id="eye"></i>
                                <i class="fa-regular fa-eye-slash" id="eye-slash"></i>
                            </div>
                        </div>
                    </div> 
                    <div class="input-field">
                        <input type="submit" class="input-submit" value="Sign In" name="signin">
                    </div> 
                </div>

            </form>

            <!-------------------- Register --------------------------->

            <form class="box-register" id="register" method="POST" action="signup.php">

                <div class="top-header">
                    <h3>Sign Up, Now</h3> 
                </div>
                <div class="input-group">
                    <div class="input-field">
                        <input type="text" class="input-box" id="regUser" name="name" required>
                        <label for="regUser">Name</label>
                    </div>
                    <div class="input-field">
                        <input type="email" class="input-box" id="regEmail" name="email" required>
                        <label for="regEmail">Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" class="input-box" id="regPassword" name="password" required>
                        <label for="regPassword">Password</label>
                        <div class="eye-area">
                            <div class="eye-box" onclick="myRegPassword()">
                                <i class="fa-regular fa-eye" id="eye-2"></i>
                                <i class="fa-regular fa-eye-slash" id="eye-slash-2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-field">
                        <input type="text" class="input-box" id="regAddress" name="address" required>
                        <label for="regAddress">Address</label>
                    </div>
                    <div class="input-field">
                        <input type="number" class="input-box" id="regPhone" name="phone" required>
                        <label for="regPhone">Phone</label>
                    </div> 
                    <div class="input-field">
                        <input type="submit" class="input-submit" value="Sign Up" name="signup">
                    </div>

                </div>

            </form>

            <!------------------------ Switch -------------------------->

            <div class="switch">
                <a href="Javascript:void(0)" class="login" onclick="login()">Login</a>
                <a href="Javascript:void(0)" class="register" onclick="register()">Register</a>
                <div class="btn-active" id="btn"></div>
            </div>

        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>