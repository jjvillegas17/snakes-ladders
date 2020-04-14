<?php

use PHPUnit\Framework\TestCase;
use SNakesLadders\Tile;

class SnakeTest extends TestCase {

    public function snakes() 
    {
        return [
            [new Tile(0,0), new Tile(1,1), new Tile(2,2)]
        ]
    }

    /**
     * @dataProvider snakes
     */
    public function test_snake_throws_exception_when_created_with_non_adjacent_tiles($snakeTiles) 
    {
        // TO DO
    }

    /**
     * @dataProvider snakes
     */
    public function test_snake_occupies_maximum_of_three_rows_up_in_the_board($snake)
    {

    }
}