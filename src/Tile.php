<?php

namespace SnakesLadders;

class Tile {
    protected $row;
    protected $col;
    protected $entity;

    public function __construct($row, $col)
    {
        $this->row = $row;
        $this->col = $col;
    }

    public function setEntity($entity)
    {
        $this->entity = $entity;
    }

    public function getEntity()
    {
        return $this->entity;
    }
}