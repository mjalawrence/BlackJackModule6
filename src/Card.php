<?php

class Card {

    public string $suit;
    public string $symbol;
    public int $score;
//    public string $name;


    public function nameOfCardCreator() {
        $nameOfCard = $this->symbol . ' of ' . $this->suit;
        return $nameOfCard;
    }

    public function showCardValue() {
        $this->score = $score;
    }
}
