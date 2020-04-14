<?php

namespace SnakesLadders;

class Tiles {
    protected $data = [];

    public function get()
    {
        return $this->data;
    }

    public function add($i,$j, $tile)
    {
        $this->data[$i][$j] = $tile;
    }
}