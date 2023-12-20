<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <?php
    $quantite = quantiterPanier();
    $CoName = aficher_conection();
    $inscri = trueCo()
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Robes<br>Africaines</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="vetementHomme.php">Vetement Homme</a>
                    </li>&nbsp;&nbsp;&nbsp;
                    <li class="nav-item">
                        <a class="nav-link" href="RobeFemme.php">Vetement femme</a>
                    </li>&nbsp;&nbsp;&nbsp;
                    <li class="nav-item">
                        <?php echo $inscri ?>
                    </li>&nbsp;&nbsp;&nbsp;
                    </li>
                    <li class="nav-item">
                        <a href="panier.php" class="nav-link">Commande</a>
                    </li>
                    <li>
                        <a href="panier.php" class="btn btn-info"><i class="bi bi-cart4"></i><?php echo $quantite; ?></a>
                    </li>
                    <li>
                        <div id="conection"><?php echo $CoName; ?></div>
                    </li>
                    <li>
                        <div class="search_container">
                            <input class="search" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </div>
            </div>
            </li>

            </ul>


        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>





<!-- 
<center>
    <div class="menu">
        <nav>
            <a href="index.php">Acceuil</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="vetementHomme.php">Vetement Homme</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="RobeFemme.php">Robe Femme</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="inscription.php">Inscription</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="connexion.php">Connexion</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="panier.php">Commande</a>
        </nav>
    </div>
</center> -->