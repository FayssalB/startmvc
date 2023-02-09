<?php
// On cherche à développer une page index.php qui nous permet de générer n'importe quelle page de notre site
// Pour cela on teste la présence d'un paramètre GET s'appelant page
// Si le paramètre n'est pas présent on génère la page d'accueil par défaut
$page = "home";
if (isset($_GET["page"])) {
    $page = $_GET["page"];
}

// echo "Nous allons générer la page {$page}";

// Tableau qui contient les différentes pages de notre site
$pages = array(
    "home" => array(
        "model" => "HomeModel",
        "view" => "HomeView",
        "controller" => "HomeController"
    ),
    "game" => array(
        "model" => "GameModel",
        "view" => "GameView",
        "controller" => "GameController"
    )
);

// On parcourt le tableau pour vérifier si la page existe réellement
$find = false;
foreach ($pages as $key => $value) {
    if ($page === $key) {
        // Nous avons trouvé la bonne page à générer
        $find = true;

        $model = $value["model"];
        $view = $value["view"];
        $controller = $value["controller"];
    }
}

// On importe le fichier contenant les constantes pour la base de données
require("../config/index.php");

// Connexion à la base games3000
$dsn = "mysql:host=" . DB_HOSTNAME . ";dbname=" . DB_DATABASE;
$db = new PDO($dsn, DB_USERNAME, DB_PASSWORD);

if ($find) {
    // On importe les différentes classes (exemple: HomeModel, HomeController et HomeView)
    require(DIR_MODEL . $page . ".php");
    require(DIR_CONTROLLER . $page . ".php");
    require(DIR_VIEW . $page . ".php");

    // Suite à l'import nous avons la possibilité d'instancier les classes importées
    $pageModel = new $model($db);
    $pageController = new $controller($pageModel);
    $pageView = new $view($pageController);

    // Appel à la méthode render() pour faire le rendu de la vue
    $pageView->render();
}
