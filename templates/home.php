<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games3000</title>
</head>

<body>
    <h1>Games3000</h1>
    <h2>Nos derniers jeux spécialement pour vous !</h2>
    <?php
    foreach ($data as $game) {
    ?>
        <div class="game">
            <h3><?= $game["name"] ?></h3>
            <img src="<?= DIR_ASSETS . "img/" . $game["image"] ?>" alt="">
            <a href="./game/<?= $game["id"] ?>">Détail</a>
        </div>
    <?php
    }
    ?>
</body>

</html>