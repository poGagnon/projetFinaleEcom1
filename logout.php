<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loggout</title>
</head>

<body>
    <?php
    include './includes/fonction.php';
    unset($_SESSION["CoName"]);
    header("Refresh:0; url=connexion.php");
    ?>
</body>

</html>