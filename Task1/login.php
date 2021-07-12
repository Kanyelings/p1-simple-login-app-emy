<?php
if(isset($_POST['submit'])){

    session_start();


$_SESSION['name'] = $_POST['name'];
$_SESSION['username'] = $_POST['username'];
$_SESSION['pass'] = $_POST['pass'];

header('Location:landing.php ');


//username
if(empty($_POST['username'])){
echo 'Enter last name  <br/>';
}
else{
echo htmlspecialchars($_POST['lastname']);
}


//checks password
if(empty($_POST['pass'])){
echo 'A password is required <br/>';
}
else{
echo htmlspecialchars($_POST['pass']);
}


}
?>
<!Doctype html>
  <html lang="en">
    <head>
        <link rel="stylesheet" href="login_style.css">
      <title>Login</title>
    </head>
      <body class="body">
        <form action="login.php" method="POST">
            <h1 class="login">Login</h1>

            <br><br>

            <div class="input">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" placeholder="Enter name" required>

              <br><br>

                <label id="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username" required>

              <label for="pass">Password</label>
              <input type="password" id="pass" name="pass" placeholder="Enter password" required>
            </div>

            <br><br>

            <div class="sub">
            <input class="submit" type="submit" name="submit" value="Login">
            </div>




        </form>

      </body>
  </html>
