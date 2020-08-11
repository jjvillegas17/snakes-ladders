<?php

namespace SnakesLadders;

class Tiles {
    protected $data = [];

    public function add($i,$j, $tile)
    {
        $this->data[] = $tile;
    }

    public function get()
    {
        return $this->data;
    }

    public function checkAdjacency() 
    {
        foreach ($this->data as $tile) {
            /* not adjacent with atleast one tile */
            if (!$tile->hasAdjacentWith($this->data)) {
                throw new \InvalidArgumentException("Not all tiles are adjacent with each other");
            }
        }
    }

    /**
     * for unit testing - dont know if its good to have a function like this for testing
     */
    public function setData($tiles)
    {
        $this->data = $tiles;
    }
}