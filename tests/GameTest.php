<?php

use PHPUnit\Framework\TestCase;
use SnakesLadders\Game;

class GameTest extends TestCase {
	public function test_try()
	{
		$game = new Game();
		$this->assertTrue(true);
	}
}