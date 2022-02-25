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
    </style>
</head>
<body>
<?php include 'navbar.php';?>
    <h2 style="padding-top: 20px;">Users Information</h2><br>
    <button id="btn" onclick="window.location.href='profile.php';">Back to Profile</button><br><br>

 <table style="width:100%;">
  <tr>
    <th>ID</th>
    <th>Email</th>
    <th>PhoneNo</th>
    <th>Action</th>
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
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["phoneNum"];?></td>
                <td><button style="background-color: #f55d42 ; color: white;"><a style="text-decoration: none; color:white;" href="delete.php?id=<?php echo $row["id"];?>">Remove</a></button></td>
            </tr>
    <?php
        }
    } else {}
    ?>
</table> 


</body>
</html>