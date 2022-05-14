<?php

require_once 'src/DeckBuilder.php';

class Dealer {

    public array $deck;

    public function shuffle(): array {
        shuffle($deck);
    }

    //refactor to get rid of array_push if poss
    public function dealToPlayersHand($card) {
        array_push($this->hand, $card);
        return $this->hand;
    }
}