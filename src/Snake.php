<?php

namespace SnakesLadders;

use SnakesLadders\Entity;

class Snake extends Entity {
    protected $tiles = [];
    protected $tail;

    public function occupy ($tailTile, $maxRow, $maxCol) 
    {
        $this->tail = $tailTile;
        
    }
}