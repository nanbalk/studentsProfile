<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border:1px solid black;
        }
        .avatar {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 150px;
        }   
    </style>
</head>
<body>
<?php include 'navbar.php';?>
<div style="padding-left: 100px;">
    <h2 style="padding-top: 20px;">My Profile</h2><br><br>

    <form action="" style="float: right;">
    <!-- <div class="avatar"> -->
  <label for="img">Photo Upload</label>
  <input type="file" id="img" name="img" accept="image/*">
    <!-- </div> -->
</form><br>

 <table style="width:60%;">
  <tr>
    <th>Info</th>
    <th>Action</th>
    <!-- <th>PhoneNo</th>
    <th>Action</th> -->
  </tr>
  <?php
    include("connect_db.php");

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        ?>
            <tr style="text-align: center;">
                <td><?php echo $row["name"];?></td>
                <td><button style="background-color: #f55d42 ; color: white;"><a style="text-decoration: none;" href="delete.php?id=<?php echo $row["id"];?>">Update</a></button></td>
            </tr>
            <tr style="text-align: center;">
                <td><?php echo $row["mail"];?></td>
                <td><button style="background-color: #f55d42 ; color: white;"><a style="text-decoration: none;" href="delete.php?id=<?php echo $row["id"];?>">Update</a></button></td>
            </tr>
            <tr style="text-align: center;">
                <td><?php echo $row["phoneNum"];?></td>
                <td><button style="background-color: #f55d42 ; color: white;"><a style="text-decoration: none;" href="delete.php?id=<?php echo $row["id"];?>">Update</a></button></td>
            </tr>
            <tr style="text-align: center;">
                <td><?php echo $row["gender"];?></td>
                <td><button style="background-color: #f55d42 ; color: white;"><a style="text-decoration: none;" href="delete.php?id=<?php echo $row["id"];?>">Update</a></button></td>
            </tr>
            <tr style="text-align: center;">
                <td><?php echo $row["maritalStatus"];?></td>
                <td><button style="background-color: #f55d42 ; color: white;"><a style="text-decoration: none;" href="delete.php?id=<?php echo $row["id"];?>">Update</a></button></td>
            </tr>
            <tr style="text-align: center;">
                <td><?php echo $row["hobby"];?></td>
                <td><button style="background-color: #f55d42 ; color: white;"><a style="text-decoration: none;" href="delete.php?id=<?php echo $row["id"];?>">Update</a></button></td>
            </tr>
            <tr style="text-align: center;">
                <td><?php echo $row["name"];?></td>
                <td><button style="background-color: #f55d42 ; color: white;"><a style="text-decoration: none;" href="delete.php?id=<?php echo $row["id"];?>">Update</a></button></td>
            </tr>
            <tr style="text-align: center;">
                <td><?php echo $row["stateOfOrigin"];?></td>
                <td><button style="background-color: #f55d42 ; color: white;"><a style="text-decoration: none;" href="delete.php?id=<?php echo $row["id"];?>">Update</a></button></td>
            </tr>
    <?php
        }
    } else {}
    ?>
</table> <br>
<button id="btn" onclick="window.location.href='users.php';">View Users</button>
</div>

<?php include 'footer.php';?>
</body>
</html>