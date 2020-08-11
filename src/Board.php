<?php

namespace SnakesLadders;

use SnakesLadders\Tiles;
use SnakesLadders\Tile;

class Board {
	/**
	 * SnakesLadders\Tiles
	 * @var array
	 */
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

	public function placeAtStart(Player $player)
	{
		$this->tiles[0][0]->placePlayer($player);
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

	public function arrangeTilesToDom() 
	{
		$arrangedTiles = [];

		$index = $this->maxRow * $this->maxCol;
		
		for ($i=0; $i < $this->maxRow * $this->maxCol; $i++) {
		}	
	}
}

/**
 * 
 *
 *
 * 11 12 13 14 15
 * 10 9 8 7 6
 * 1 2 3 4 5
 * 
 */