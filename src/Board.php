<?php

namespace SnakesLadders;

class Board {
	protected $row;
	protected $col;
	protected $data = [];

	public function __construct($row, $col)
	{
		if ($row <= 0 || $col <= 0) {
			throw new \InvalidArgumentException("Row and column cannot be zero or negative number.");
			
		}

		for($i = 0 ; $i < $row ; $i++) {
			for($j = 0 ; $j < $col ; $j++) {
				$this->data[$i][$j] = 0;
			}
		}
	}

	public function get()
	{
		return $this->data;
	}
}