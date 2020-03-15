<?php

use PHPUnit\Framework\TestCase;
use SnakesLadders\Board;


class BoardTest extends TestCase {
    public function test_board_creates_correct_2d_array()
    {
        $expected = array(
            0 => array(0,0,0),
            1 => array(0,0,0),
            2 => array(0,0,0),
        );
        $board = new Board(3,3);
        
        $this->assertEquals($board->get(), $expected);
    }

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

    public function test_board_can_place_snakes()
    {
        $board = new Board(5,5);
        $snakes = SpawnableObjectsFactory::create('snakes');
        $board->tile($row, $col)->place($snakes);

        $this->assertInstanceOf(Snake::class, $board->getTile($row, $col));
    }
}