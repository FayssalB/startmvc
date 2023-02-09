<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail d'un jeu</title>
</head>

<body>
    <?php
    if (empty($data)) {
    ?>
        <h1>Jeu introuvable</h1>
    <?php
    } else {
    ?>
        <h1><?= $data["name"] ?></h1>
        <p><?= $data["price"] ?>€</p>
        <img src="<?= DIR_ASSETS . "img/" . $data["image"] ?>" alt="">
    <?php
    }
    ?>
</body>

</html>