<?php

require_once 'src/PlayerOne.php';
require_once 'src/PlayerTwo.php';

class Game {

    public array $playerOne;
    public array $playerTwo;

    public function startGame() {
        $this->playerOne = new PlayerOne();
        $this->playerTwo = new PlayerTwo();
        $playerOne[]->addCardToHand($this->dealer->card);
        $playerTwo[]->addCardToHand($this->dealer->card);
        $playerOne[]->addCardToHand($this->dealer->card);
        $playerTwo[]->addCardToHand($this->dealer->card);
    }

}







//    public function determineResult():
//    {
//        $player1Hand = array($player1Card1, $player1Card2);
////echo '<pre>';
////var_dump ($player1Hand);
////echo '</pre>';
//        $player2Hand = array($player2Card1, $player2Card2);
////echo '<pre>';
////var_dump ($player2Hand);
////echo '</pre>';
//
//        $player1Score = 0;
//        foreach ($player1Hand as $card) {
//            $player1Score += $card['value'];
//        }
//
//        foreach ($player1Hand as $player1Card) {
//            echo $player1Card['name'] . "<br />";
//        }
//
//        echo "Player 1's score: " . $player1Score;
//        echo "<br />";
//        echo "<br />";
//
//        $player2Score = 0;
//        foreach ($player2Hand as $card) {
//            $player2Score += $card['value'];
//        }
//
//        foreach ($player2Hand as $player2Card) {
//            echo $player2Card['name'] . "<br />";
//        }
//
//        echo "Player 2's score: " . $player2Score;
//        echo "<br />";
//        echo "<br />";
//        if ($player1Score === $player2Score) {
//            echo "It's a draw. Deal again.";
//        } elseif ($player1Score > 21 ) {
//            echo "Player 1 BUST!";
//        } elseif ($player2Score > 21) {
//            echo "Player 2 BUST!";
//        } elseif  ($player1Score < $player2Score) {
//            echo "Player 2 Wins.";
//        } elseif ($player1Score > $player2Score) {
//            echo "Player 1 Wins.";
//        }
//    }
//}