<?php

namespace SnakesLadders;

use SnakesLadders\Tiles;
use SnakesLadders\Tile;

class Board {
	protected $tiles = [];

	public function __construct($row, $col)
	{
		// extract to a new function
		if ($row <= 0 || $col <= 0) {
			throw new \InvalidArgumentException("Row and column cannot be zero or negative number.");
			
		}

		for($i = 0 ; $i < $row ; $i++) {
			for($j = 0 ; $j < $col ; $j++) {
				$this->tiles[$i][$j] = new Tile($i, $j);
			}
		}
	}

	public function get()
	{
		return $this->tiles;
	}
}