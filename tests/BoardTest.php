<?php

use PHPUnit\Framework\TestCase;
use SnakesLadders\Board;
use SnakesLadders\Snake;
use SnakesLadders\EntityFactory;
use SnakesLadders\EntityType;

class BoardTest extends TestCase {

    public function negativeDimensions()
    {
        return array(
            array(0,5),
            array(5,0),
            array(-5,-5),
            array(-5,5),
            array(5,-5)
        );
    }

    /**
     * @dataProvider negativeDimensions
     */
    public function test_board_throws_exception_on_invalid_dimensions($row, $col)
    {
        $this->expectException(InvalidArgumentException::class);
        $board = new Board($row, $col);
    }

    public function test_board_creates_correct_number_of_rows()
    {
        $board = new Board(5,5);
        
        $this->assertCount(5, $board->get());
    }

    public function test_board_creates_correct_number_of_cols()
    {
        $board = new Board(5,6);

        foreach ($board->get() as $row) {
            $this->assertCount(6,$row);
        }
    }

    public function test_board_creates_a_tile_object()
    {
        $board = new Board(5,5);
        
        $this->assertContainsOnlyInstancesOf('\SnakesLadders\Tile', $board->get()[0]);
    }

    public function snakes() 
    {
        return [
            [[new Snake(3,0), new Snake(2,2)], 3, 0],
            [[new Snake(3,0), new Snake(2,2)], 2, 2]
        ];
    }

    // https://engagor.github.io/blog/2017/08/01/tips-for-better-phpunit-tests/
    
    /**
     * @dataProvider snakes
     */
    // public function test_board_places_snake($snakes, $row, $col)
    // {
    //     $board = new Board(5,5);
    //     $board->place($snakes);

    //     $this->assertInstanceOf('SnakesLadders\Snake', $board->getTile($row, $col)->getEntity());
    // }
}