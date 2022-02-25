<?php

       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "Student";

      
       $conn = mysqli_connect($servername, $username, $password, $dbname);

       if (!$conn){
           
           echo "Connection error: " .mysqli_connect_error();
       }else{
       
            // echo "Success";
         
        }
?>