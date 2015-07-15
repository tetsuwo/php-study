<?php

class Player {
    const STATE_DEATH = 1; // 0b000001
    const STATE_POISON = 2; // 0b000010
    const STATE_SLEEP = 4; // 0b000100
    const STATE_PETRIFIED = 8; // 0b001000
    const STATE_CONFUSION = 16; // 0b010000
    const STATE_PARALYSIS = 32; // 0b100000

    private $state = 0;

    public function getState()
    {
        return $this->state;
    }

    public function setState($value)
    {
        $this->state = $value;
    }
}
