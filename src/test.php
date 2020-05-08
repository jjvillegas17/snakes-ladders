<?php

require 'vendor/autoload.php';

use SnakesLadders\Tile;
use SnakesLadders\Tiles;

$tilesA = [new Tile(1,1), new Tile(2,1), new Tile(3,4)];
$tilesB = [new Tile(1,0), new Tile(1,2), new Tile(2,3)];
$tilesObj = new Tiles();
var_dump(array_diff($tilesA, [$tilesA[0]]));
// $tilesObj->setData($tilesA);
// $tilesObj->checkAdjacency();