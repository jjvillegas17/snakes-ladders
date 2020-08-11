<?php

use PHPUnit\Framework\TestCase;
use SnakesLadders\Tile;

class TileTest extends TestCase {

    public function adjacentTiles() 
    {
        return [
            [new Tile(2,2), new Tile(1,1)],
            [new Tile(2,2), new Tile(1,2)],
            [new Tile(2,2), new Tile(1,3)],
            [new Tile(2,2), new Tile(2,1)],
            [new Tile(2,2), new Tile(2,3)],
            [new Tile(2,2), new Tile(3,1)],
            [new Tile(2,2), new Tile(3,2)],
            [new Tile(2,2), new Tile(3,3)]
        ];
    }

    /**
     * @dataProvider adjacentTiles
     */
    public function test_tile_returns_true_when_given_adjacent_tile($tile, $tileTobeCompared)
    {
        $this->assertTrue($tile->isAdjacentWith($tileTobeCompared));
    }

    public function nonAdjacentTiles()
    {
        return [
            [new Tile(2,2), new Tile(1,0)],
            [new Tile(2,2), new Tile(0,1)],
            [new Tile(2,2), new Tile(0,2)],
            [new Tile(2,2), new Tile(0,3)],
            [new Tile(2,2), new Tile(2,4)],
            [new Tile(2,2), new Tile(4,2)],
            [new Tile(2,2), new Tile(4,0)],
            [new Tile(2,2), new Tile(3,0)],
            [new Tile(2,2), new Tile(0,0)],
        ];
    }

    /**
     * @dataProvider nonAdjacentTiles
     */
    public function test_tile_returns_false_when_given_non_adjacent_tile($tile, $tileTobeCompared)
    {
        $this->assertFalse($tile->isAdjacentWith($tileTobeCompared));
    }


    public function tiles() 
    {
        return [
            [new Tile(0,1),[new Tile(0,1), new Tile(1,2), new Tile(2,2)]],
            [new Tile(1,2),[new Tile(0,1), new Tile(1,2), new Tile(2,2)]],
            [new Tile(2,2),[new Tile(0,1), new Tile(1,2), new Tile(2,2)]],
        ];
    }

    /**
     * @dataProvider tiles
     */
    public function test_tile_has_adjacent_with($tile, $tilesToBeCompared) 
    {
        $this->assertTrue($tile->hasAdjacentWith($tilesToBeCompared));
    }
}