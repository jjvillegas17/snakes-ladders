<?php

use PHPUnit\Framework\TestCase;
use SnakesLadders\Board;
use SnakesLadders\Player;
use SnakesLadders\EntityFactory;

class BoardTest extends TestCase {
	public function test_board_places_entity_at_start()
	{
		$board = new Board(5,5);

		for ($i = 0 ; $i < 5; $i++) {
			$player = EntityFactory::createWithTiles('player', [0,0]);
			$board->placeAtStart($player);
		}

		$this->assertCount(5, $board->getTile(0,0)->getPlayers());
		$this->assertContainsOnlyInstancesOf("SnakesLadders\Player", $board->getTile(0,0)->getPlayers());
	}
}