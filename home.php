<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
        <link rel="stylesheet" href="home.css">
    </head>
    <body>

    <?php include 'navbar.php';?>
        <div class="box"> 
            <h4>AXIA HUB</h4>
            <button  style ="margin-left: 53%;"id="btn" onclick="window.location.href='login.php';">Login</button>&nbsp;
            <button id="btn" onclick="window.location.href='register.php';">Register</button>&nbsp;
            <button id="btn" onclick="window.location.href='users.php';">View Users</button>
        </div>   

    <?php include 'footer.php';?>
    </body>
</html>