<?php

require '../../vendor/autoload.php';

use SnakesLadders\Board;

if (!isset($_SESSION["board"])) {
	$player1 = new Player();
	$player2 = new Player();
	$board = new Board(5,5);
	$_SESSION["board"] = $board;
		
}

$board = new Board(5,5);
var_dump(json_encode($board));