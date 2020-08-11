<?php

use PHPUnit\Framework\TestCase;
use SnakesLadders\Tile;
use SnakesLadders\Tiles;

class TilesTest extends TestCase {


    public function tiles()
    {
        return [
            [[new Tile(0,1), new Tile(1,2), new Tile(2,2)]],
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

/*

  0 1 2 3 4 5
0 
1 x
2   x
3         x
4
5

*/