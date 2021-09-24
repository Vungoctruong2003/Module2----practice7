<?php

class TennisGame
{

    public $noticeGame = "";

    public function getInfoEqualPoints($scoreOfPlayer1, $scoreOfPlayer2)
    {
        if ($scoreOfPlayer1 == $scoreOfPlayer2) {
            switch ($scoreOfPlayer1) {
                case 0:
                    $this->noticeGame = "Love-All";
                    break;
                case 1:
                    $this->noticeGame = "Fifteen-All";
                    break;
                case 2:
                    $this->noticeGame = "Thirty-All";
                    break;
                case 3:
                    $this->noticeGame = "Forty-All";
                    break;
                default:
                    $this->noticeGame = "Deuce";
                    break;
            }
        }
        return $this->noticeGame;
    }

    public function getInfoEndGame($scoreOfPlayer1, $scoreOfPlayer2)
    {
        if ($scoreOfPlayer1 >= 4 || $scoreOfPlayer2 >= 4) {
            $decisivePoint = $scoreOfPlayer1 - $scoreOfPlayer2;
            if ($decisivePoint == 1) $this->noticeGame = "Advantage player1";
            else if ($decisivePoint == -1) $this->noticeGame = "Advantage player2";
            else if ($decisivePoint >= 2) $this->noticeGame = "Win for player1";
            else $this->noticeGame = "Win for player2";
        }
        return $this->noticeGame;
    }

    public function getInfoBeginGame($scoreOfPlayer1, $scoreOfPlayer2)
    {
        for ($i = 1; $i < 3; $i++) {
            if ($i == 1) $tempScore = $scoreOfPlayer1;
            else {
                $this->noticeGame .= "-";
                $tempScore = $scoreOfPlayer2;
            }
            switch ($tempScore) {
                case 0:
                    $this->noticeGame .= "Love";
                    break;
                case 1:
                    $this->noticeGame .= "Fifteen";
                    break;
                case 2:
                    $this->noticeGame .= "Thirty";
                    break;
                case 3:
                    $this->noticeGame .= "Forty";
                    break;
            }
        }
        return $this->noticeGame;
    }

    public function getInfoOfGame($namePlayer1, $namePlayer2, $scoreOfPlayer1, $scoreOfPlayer2)
    {
        $this->getInfoBeginGame($scoreOfPlayer1, $scoreOfPlayer2);
        $this->getInfoEqualPoints($scoreOfPlayer1, $scoreOfPlayer2);
        $this->getInfoEndGame($scoreOfPlayer1, $scoreOfPlayer2);
    }

    public function __toString()
    {
        return $this->noticeGame;
    }
}


