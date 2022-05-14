<?php

require_once 'src/Dealer.php';

class Player {

    public string $name;
    public array $hand;
    public int $score;
    public bool $notBustYet = true;

    function __construct($nameOfPlayer) {
        $this->name = $nameOfPlayer;
    }

    //refactor to get rid of array_push if poss
    public function addCardToHand($card) {
        array_push($this->hand, $card);
        return $this->hand;
    }

    public function calculateScoreInHand() {
        $totalScoreInHand = 0;
            foreach ($this->hand as $cardValue) {
                {
                    $totalScoreInHand += $cardValue->value;
                }
            }
        return $totalScoreInHand;
    }

}