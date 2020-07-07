<?php
class Robot {
    public $coordinates = [];
    public $direction;
    public const DIRECTION_NORTH = 'NORTH';
	public const DIRECTION_EAST = 'EAST';
	public const DIRECTION_SOUTH = 'SOUTH';
	public const DIRECTION_WEST = 'WEST';

    public function __construct($coordinates, $direction) {
        $this->coordinates = $coordinates;
        $this->direction = $direction;
    }

    public function turnRight() {
        switch ($this->direction) {
            case 'NORTH':
                $this->direction = self::DIRECTION_EAST;
                break;
            case 'EAST':
                $this->direction = self::DIRECTION_SOUTH;
                break;
            case 'SOUTH':
                $this->direction = self::DIRECTION_WEST;
                break;
            case 'WEST':
                $this->direction = self::DIRECTION_NORTH;
                break;
        }
    }

    public function turnLeft() {
        switch ($this->direction) {
            case 'NORTH':
                $this->direction = self::DIRECTION_WEST;
                break;
            case 'EAST':
                $this->direction = self::DIRECTION_NORTH;
                break;
            case 'SOUTH':
                $this->direction = self::DIRECTION_EAST;
                break;
            case 'WEST':
                $this->direction = self::DIRECTION_SOUTH;
                break;
        }
    }

    public function advance() {
        switch ($this->direction) {
            case 'NORTH':
                $this->coordinates[1] += 1;
                break;
            case 'EAST':
                $this->coordinates[0] += 1;
                break;
            case 'SOUTH':
                $this->coordinates[1] += - 1;
                break;
            case 'WEST':
                $this->coordinates[0] += - 1;
                break;
        }

    }

    public function instructions($instructions) {
        for ($i = 0; $i < strlen($instructions); $i++) {
            switch ($instructions[$i]) {
                case 'R':
                    $this->turnRight();
                    break;
                case 'L':
                    $this->turnLeft();
                    break;
                case 'A':
                    $this->advance();
                    break;
                default:
                    throw new InvalidArgumentException('Argumento Inválido');
            }
        }
    }
}

