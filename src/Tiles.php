<?php

namespace SnakesLadders;

class Tiles {
    protected $data = [];

    // public function get()
    // {
    //     return $this->data;
    // }

    public function add($i,$j, $tile)
    {
        $this->data[] = $tile;
    }

    public function checkAdjacency() 
    {
        foreach ($this->data as $tile) {
            var_dump($tile);
            $tilesToBeComparedTo = array_diff($this->data, [$tile]);
            if (!$tile->hasAdjacentWith($tilesToBeComparedTo)) {
                throw new \InvalidArgumentException("Not all tiles are adjacent with each other");
            }
        }
    }

    /**
     * for unit testing - dont know if its good to have a function for testing
     */
    public function setData($tiles)
    {
        $this->data = $tiles;
    }
}