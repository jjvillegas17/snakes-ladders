<?php
// This will be the client code


// set board
// set players
// client code will implement the start
// game implements Startable so that client wont 
// test if spawned object is within bounds


// Spawnable: player,snake,ladders


// $board = new Board(10, 10);
// $snakes = $spawnableFactory::create('snakes');
// $ladders = $spawnableFactory::create('ladders');
// $board->place($snakes)
// 	  ->place($ladders);
// $board->make('snakes')->count(2);
// $board->place(Spawnable $players);
// $board->place(Spawnable $snakes);
// $board->place(Spawnable $ladders);

// // currently can do
// $board = new Board(5,5);
// $game = new Game($board, 3);


// $snake->place($board);
// $snake = new Snake();
// $board->place($snake);
/**
* entityFactory is still used for creating snakes with random tiles such 
* that creating snakes will be easy for the client code - 
* EntityFactory::create('snake', 5);
*/ 
// $snake = EntityFactory::create('snake', [[0,0],[1,0],[2,0]]);
// $board->place(Spawnable $snakes);
// $board->place(Spawnable $ladders);
// $game->start();

// while (!$game->isFinish()) {
// 	/** var player */
// 	$player = $game->getPlayerTurn();
// 	$moves = Dice::roll();
// 	$player->move($moves);
// }

/**
 * TODO:
 * 1. make placing of entity hard coded first 
 * 		- EntityFactory::createWithTiles($enity, $row, $col)
 * 2. then make it random
 * 		- EntityFactory::createWithRandomTiles($entity, $num)
 * 3. create unit test for making snakes with random tiles
 * 		- test_snake_occupies_maximum_of_three_rows_up_in_the_board($snake)
 * 4. create unit test for placing hard coded snakes
 * 5. how to test this test_snake_throws_exception_when_created_with_non_adjacent_tiles
 */


