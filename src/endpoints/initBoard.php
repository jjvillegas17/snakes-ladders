<?php

/** 
1. create a player
2. create a board
3. place both players on the first tile of the board
4. integrate it on the frontend
**/

use SnakesLadders\Board;
use SnakesLadders\EntityFactory;

$data = $_GET;

$board = new Board($data["row"], $data["col"]);

$players = [];
// instantiate number of players
for ($i = 0 ; $i < $data["players"] ; $i++) {
	$player = EntityFactory::createWithTiles('player', [0,0]);
	$board->placeAtStart($player);
}



