<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {
    ?>
    <!doctype html>
    <html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
    <p><a href="delete.php">Delete account</a>
    <h2>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h2>
    <p>
        Bienvenido a Quinielero!
    </p>
    </body>
    </html>
<?php
}
?>


