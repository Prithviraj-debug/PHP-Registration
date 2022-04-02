<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/login.css">
        <link rel="stylesheet" href="./assets/styles/style.css">
    <script src="./assets/scripts/app.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="./assets/img/fav.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <div class="container loginForm">
            <div class="loginCon">
                <h1>Login</h1>
                <?php if (isset($_GET['error'])) { ?>
                <p class='error'><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <div class="login" id="login">
                    <div class="logform">
                        <div>
                            <label>Username</label>
                            <input type="text" name="username" placeholder="Username">
                        </div>
                        
                        <div>
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        
                        <button type="submit" class="logbtn"><img src="./assets/img/next.png" alt="" srcset=""></button>
                    </div>
                </div>
                <div class="frgtPss">
                    <a onclick="frgtPss()">Forgot Password?</a>
                    <a href="register.html">New User?</a>
                </div>
            </div>
        </div>
    </form>
<script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>