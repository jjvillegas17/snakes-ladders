<?php

namespace SnakesLadders;

use SnakesLadders\Snake;

class EntityFactory {
	protected static $entities = [
        'snake' => Snake::class
    ];

    public static function create($entity, $num, $board)
    {
        $objs = [];

        for ($i = 0 ; $i < $num ; $i++) {
            $entity = new self::$entities[$entity]();
            $randomRow = $rand(0, $maxRow-1);
            $randomCol = $rand(0, $maxCol-1);
            $tailTile = new Tile($randomRow, $randomCol);
            $objs[] = $entity->occupy($tailTile, $row, $col);
        }

        return $objs;
    }
}