<?php

namespace SnakesLadders;

use SnakesLadders\Tiles;
use SnakesLadders\Tile;

class Board {
	protected $tiles = [];
	protected $maxRow;
	protected $maxCol;

	public function __construct($row, $col)
	{
		// extract to a new function
		if ($row <= 0 || $col <= 0) {
			throw new \InvalidArgumentException("Row and column cannot be zero or negative number.");
			
		}

		$this->maxRow = $row;
		$this->maxCol = $col;

		// extract to a new function
		for($i = 0 ; $i < $row ; $i++) {
			for($j = 0 ; $j < $col ; $j++) {
				$this->tiles[$i][$j] = new Tile($i, $j);
			}
		}
	}

	public function place($entities) 
	{
		foreach ($entities as $entity) { 
			$tile = $this->tiles[$entity->getRow()][$entity->getCol()];
			$tile->setEntity($entity);
		}
	}

	public function get()
	{
		return $this->tiles;
	}

	public function getTile($row, $col)
	{
		return $this->tiles[$row][$col];
	}	

	public function getMaxRow() 
	{
		return $this->maxRow;
	}

	public function getMaxCol()
	{
		return $this->maxCol;
	}
}