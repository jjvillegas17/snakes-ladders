<?php

namespace SnakesLadders;

abstract class Entity {
    protected $row;
    protected $col;

    // abstract public function occupy();

    public function getRow() 
    {
        return $this->row;
    }

    public function getCol() 
    {
        return $this->col;
    }
}