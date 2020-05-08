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
    
    public function hasAdjacentWith($tilesToBeComparedTo)
    {
        foreach ($tilesToBeComparedTo as $tile) {
            if ($this->isAdjacentWith($tile)) {
                return true;
            }
        }
    }

    public function isAdjacentWith($tile) 
    {
        return ($this->isRowInRange($tile) && $this->isColInRange($tile));
    }

    private function isRowInRange($tile)
    {
        return $tile->getRow() >= $this->row - 1 && $tile->getRow() <= $this->row + 1;
    }

    private function isColInRange($tile)
    {
        return $tile->getCol() >= $this->col - 1 && $tile->getCol() <= $this->col + 1;
    }

    public function getRow()
    {
        return $this->row;
    }

    public function getCol()
    {
        return $this->col;
    }

    public function toArray()
    {
        return get_object_vars($this);
    }
}