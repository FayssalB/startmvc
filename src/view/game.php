<?php
class GameView
{
    private $controller;
    private $template;

    public function __construct(GameController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "game.php";
    }

    public function render()
    {
        $data = $this->controller->get();
        require($this->template);
    }
}
