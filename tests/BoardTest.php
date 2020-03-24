<?php

use PHPUnit\Framework\TestCase;
use SnakesLadders\Board;


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
}