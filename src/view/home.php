<?php
class HomeView
{
    private $controller;
    private $template;

    public function __construct(HomeController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "home.php";
    }

    public function render()
    {
        // Récupération des derniers jeux dans la BDD via la méthode getLastGames de notre controller
        $data = $this->controller->getLastGames();
        require($this->template);
    }
}
