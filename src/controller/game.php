<?php
class GameController
{
    private $model;

    public function __construct(GameModel $model)
    {
        $this->model = $model;
    }

    public function get()
    {
        $query = $this->model->db->prepare("SELECT * FROM games WHERE id = :id");
        $query->bindParam(":id", $this->model->id, PDO::PARAM_INT);
        $query->execute();
        $game = $query->fetch();

        return $game;
    }
}
