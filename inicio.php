<?php
session_start();
$name = $_SESSION["name"];
$email = $_SESSION["email"];
if (isset($_POST["submit"])) {

    unset($_SESSION["name"]);
    unset($_SESSION["email"]);
    session_destroy();
}
if (!isset($_SESSION["name"])) {

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP SESSIONS</title>
    <style>
        * body { background-color: #3b83bd; }
  </style>
</head>

<body>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <div class="container">
            <h5 align="center" > <font face="Comic Sans MS,arial" size=5> 
            Gracias <?php echo $name; ?> te as suscrito con el email <?php echo $email; ?> </h5>
            <button type="submit" name="submit">LOGOUT</button>
        </div>
    </form>

</body>

</html>
