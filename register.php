<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
<form action="connect.php" method="post">
  <div class="container" style="width: 50%;margin: 0 auto;">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="#"><b>username</b></label><br>
    <input type="text" placeholder="Username" id="username" name="username"><br><br>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" id="email" required><br><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required><br><br>

    <label for="psw-repeat"><b>Conform Password</b></label><br>
    <input type="password" placeholder="Conform Password" name="cofirmpassword" id="psw-repeat" required><br><br>
    <hr>
    <button type="submit" name="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login.php">login</a>.</p>
  </div>
</form>
</body>
</html>