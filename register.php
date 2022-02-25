

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="register.css">

    

</head>
<body>
<?php include 'navbar.php';?>

    <section class='login' id='login'>
        <div class='head'>
         <h1 class='signup'>Sign Up</h1>
        </div>
       
        <div class='form'>
          <form name="signUpForm" action="registerprocess.php" onsubmit="return validateForm()" method="post">

            <input type="text" name="names" placeholder='Username' class='text' id='username' ><br>

            <input type="email" name="email" placeholder='abcd@gmail.com' class='text' id='email' ><br>

            <input type="text" name="phoneNo" placeholder='Phone Number' class='text' id='phoneno' ><br>

            <input type="text" name="address" placeholder='Address' class='text' id='address' ><br>

            <input type="password" name="password" placeholder='Password' class='text' id='password' ><br>
            
            <input type="password" name="confirmPassword" placeholder='Corfirm Password' class='text' id='password' ><br>


            <p>Gender: <br>
              <input type="radio" name="gender" class='Radio' value="male" checked>Male &nbsp;
              <input type="radio" name="gender"class='Radio' value="female" checked>Female
            </p>

            <p>Marital Status: <br>
              <input type="radio" name="mStatus" class='Radio' value="Single" checked>Single &nbsp;
              <input type="radio" name="mStatus"class='Radio' value="Married" checked>Married 
            </p>

            <p>Hobby: <br>
              <input type="checkbox" name="hobby" value="sing"> Singing &nbsp;
              <input type="checkbox" name="hobby" value="read"> Reading  &nbsp;
              <input type="checkbox" name="hobby" value="code"> Coding  &nbsp;
              <input type="checkbox" name="hobby" value="cook"> Cooking  &nbsp;
              <input type="checkbox" name="hobby" value="dance"> Dancing  &nbsp;
            </p>  
              
            <p>
            State of Origin <br>
              <select type="text" value="" name="state"> Select your state of origin 
                  <option value="pleatau">Pleatua</option>
                  <option value="kano">Kano</option>
                  <option value="kastina">Kastina</option>
                  <option value="bauchi">Bauchi</option>
                  <option value="kebbi">Kebbi</option>
                  <option value="delta">Delta</option>
                  <option value="kogi">Kogi</option>
                  <option value="edo">Edo</option>
                  <option value="cross-river"> Cross Rivers</option>
                  <option value="lagos">Lagos</option>
              </select>
            </p>

            <input type="submit" value="Submit" class="submit">
            <!-- <input type="submit" value="Submit" class="submit"> -->
          
            
          </form>
        </div>

        <div>
          <h6>Already have an account? <a href="login.php">Login</a></h6>
        </div>
    </section>

      <!-- liniking js file -->
      <script src="script.js"></script>

      <?php include 'footer.php';?>
</body>
</html>