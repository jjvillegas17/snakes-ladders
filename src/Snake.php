<?php

namespace SnakesLadders;

use SnakesLadders\Entity;

class Snake extends Entity {
    protected $tiles = [];
    protected $tail;

    public function __construct($tiles) 
    {
        $this->tiles = $tiles;

        $this->setTail($tiles);
    }

    private function currTileHasLowerRowThanTail() 
    {
        return $tile->getRow() < $this->tail->getRow();
    }

    private function currTailHasGreaterColThanTail()
    {
        return $tile->getCol() > $this->tail->getCol();
    }

    public function tail() 
    {
        return $this->tail;
    }

    /**
     * get the tile with highest row and lowest tile
     */
    public function setTail($tiles)
    {
        foreach ($tiles as $tile)
        {
            if (!$this->currTileHasLowerRowThanTail()) {
                continue;
            } 

            $this->tail = $tile;

            if ($this->currTailHasGreaterColThanTail()) {
                $this->tail = $tile;
            }
        }
    }
}