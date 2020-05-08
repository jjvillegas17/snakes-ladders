<?php

use PHPUnit\Framework\TestCase;
use SnakesLadders\Tile;
use SnakesLadders\Tiles;

class TilesTest extends TestCase {


    public function tiles()
    {
        return [
            [new Tile(1,1), new Tile(2,1), new Tile(3,4)],
            [new Tile(1,0), new Tile(1,2), new Tile(2,3)]
        ];
    }

    /**
     * @dataProvider tiles
     */
    public function test_tiles_throws_exception_on_non_adjacent_data($tilesArr)
    {
        $this->expectException(InvalidArgumentException::class);
        $tilesObj = new Tiles();
        $tilesObj->setData($tilesArr);
        $tilesObj->checkAdjacency();
    }
}