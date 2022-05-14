<?php

class Deck {

    public array $deck;

    public function __construct(string $suit, string $symbol, int $value, string $name)
    {
        $this->suit = $suit;
        $this->symbol = $symbol;
        $this->value = $value;
        $this->name = $name;
    }
}
