<!DOCTYPE html>
<html>

<head>
    <title>Détails de l'image</title>
    <link rel="stylesheet" type="text/css" href="css/robeafricaine.css">
</head>

<body>
    <?php
    include './includes/fonction.php';
    include './public/header.php';
    include './includes/data.inc.php';
    $url = $_SERVER['REQUEST_URI'];
    $myid = substr($url, 37);
    foreach ($image as $key => $val) {
        if ($myid == $val['id']) {
            $find = $key;
        }
    }
    echo '<script>console.log(' . $find . $myid . ')</script>';
    echo '<div id="detImg"><img class="detaille_img" src="' . $image[$find]['image'] . '" alt="Card image cap">
    <div class=detailinfo>
    &nbsp;&nbsp;<label for="tailles">Taille disponible :</label>
    <select id="tailles" name="tailles">
        <option value="small">Small</option>
        <option value="medium">Medium</option>
        <option value="large">Large</option>
    </select><br/>
    &nbsp;&nbsp;<label for="tailles">Quantite possible pour achat :</label>
    <select id="tailles" name="tailles">
        <option value="1">1 robe</option>
        <option value="5">5 robes(rabais de 20%)</option>
        <option value="10">10 robes(rabais de 35%)</option>
    </select><br />
    <label>Stock de la marchandise</label><input type="number" style="width:100px;" value="200" readonly></input>
    </div>
        <p class="detaille_description">' . $image[$find]['description'] . '</p></div>';
    return;
    ?>
</body>

</html>