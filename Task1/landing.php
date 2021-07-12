<?php

session_start();
$name = $_SESSION['name'];
$username = $_SESSION['username'];
$password = $_SESSION['pass'];
$admin = 'admin';
$Admin = 'Admin';

if (((($username==$admin))or($username==$Admin) )and (($password==$admin)or ($password==$Admin))){
echo 'Successful login';
}
else{
    echo 'Unsuccessful login';
}

?>

<!Doctype html>
  <html>
    <head>
        <title>Landing Page</title>
    </head>

    <body>
    <header>
        <nav>
            <p style= "float:right">
                <a href="#"> Register</a>
            <p>Hey <?php echo htmlspecialchars($name);?> </p>

        </nav>
    </header>
    <br/>
    <hr color = "black"/>


    </body>
  </html>
