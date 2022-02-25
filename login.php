<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<?php include 'navbar.php';?>
    <section class='login' id='login'>
        <div class='head'>
         <h1 class='signup'>Login In</h1>
        
        </div>
       
        <div class='form'>
            <form name="loginForm" action="loginprocess.php" method="post">
        
            
                <input type="email" name="email" placeholder='abcd@gmail.com' class='text' id='email' required><br>

                <input type="password" name="password" placeholder='Password' class='text' id='password' required><br>
            
                <input type="submit" name="save" value="Login" class="btn"> &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="forgetpassword.html">Forgot Password?</a>
                <!-- <input type="submit" value="Forgot Password" class="btn"> -->
            </form>
        </div>

        <div>
            <h6>Don't have an account? <a href="register.php">Register</a></a></h2>
        </div>
    </section>

    <?php include 'footer.php';?>
</body>
</html>