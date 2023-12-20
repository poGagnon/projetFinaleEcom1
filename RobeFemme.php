<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Vetement pour femme</title>
    <link rel="stylesheet" type="text/css" href="css/robeafricaine.css">
</head>

<body>
    <form method="post">
        <?php
        include './includes/fonction.php';

        if (isset($_POST['ajouter'])) {
            echo '<script>console.log(' . $_POST['ajouter'] . ')</script>';
            addPanier();
            $_POST['ajouter'] = NULL;
        }
        include './public/header.php';
        include './includes/data.inc.php';
        $imageContainer = '';
        foreach ($image as $img) {
            if ($img['sexe'] == 'femme') {
                $imageContainer .= '<div class="card">
            <img class="card-img-top" src="' . $img['image'] . '" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">' . $img['titre'] . '</h5>
                <p class="card-text">' . $img['description'] . '</p>
                <button type="submit" name="ajouter" id="ajouter' . $img['id'] . '" class="btn btn-info" value="' . $img['id'] . '"><img id="cart" src="./media/cart.png" /></button>    
                <button type="button" class="btn btn-warning price">'.$img['prix'].'</button>         
                <a href="detailimage.php?id=' . $img['id'] . '" class="btn btn-info" id="Details">Details</a>
            </div>
        </div>';
            }
        }

        // Envelopper les images dans une div "container" pour les afficher côte à côte
        echo '<div class="image-container">' . $imageContainer . '</div>';


        ?>
    </form>
</body>

</html>