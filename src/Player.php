<?php

namespace SnakesLadders;

use SnakesLadders\Entity;

class Player extends Entity {
    protected $tile;

    public function __construct($tile) 
    {
        $this->tile = $tile;
    }

}