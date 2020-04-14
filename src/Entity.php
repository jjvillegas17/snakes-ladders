<?php

namespace SnakesLadders;

abstract class Entity {
    protected $row;
    protected $col;

    public function getRow() 
    {
        return $this->row;
    }

    public function getCol() 
    {
        return $this->col;
    }
}