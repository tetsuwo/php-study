<?php

class Player {
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
