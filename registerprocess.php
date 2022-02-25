        <?php
        extract($_POST);
        include("connect_db.php");

        $name = $_POST['names'];
        $mail = $_POST['email'];
        $phoneNum = $_POST['phoneNo'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword']; 
        $gender = $_POST['gender'];
        $maritalStatus = $_POST['mStatus'];
        $hobby = $_POST['hobby'];
        $stateOfOrigin = $_POST['state'];

        $sql = "INSERT INTO users VALUES ('0', '$name', '$mail', '$phoneNum', 
        '$address', '$password', '$confirmPassword', '$gender', '$maritalStatus', '$hobby', '$stateOfOrigin')";

        if(mysqli_query($conn, $sql)){
            // echo "Success";
            header("Location:home.html?status=success");
        }else{
            echo 'query error: '.mysqli_error($conn);
        }

        mysqli_close($conn);

        ?>