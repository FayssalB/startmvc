<?php
class GameModel {
    public $db;
    public $id;

    public function __construct(PDO $db)
    {
        $this->db = $db;
        if (isset($_GET["id"])) {
            $this->id = $_GET["id"];
        }
    }
}