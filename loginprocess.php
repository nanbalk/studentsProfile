<?php
session_start();
if(isset($_POST['']))
{
    extract($_POST);
    include 'connect_db.php';
    $sql=mysqli_query($conn,"SELECT * FROM users where mail='$email' and password ='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id"] = $row['id'];
        $_SESSION["mail"]=$row['mail'];
        // $_SESSION["name"]=$row['name'];
        // $_SESSION["phoneNum"]=$row['phoneNum']; 
        header("Location: home.html"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>