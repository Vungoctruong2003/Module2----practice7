<?php

include ('TennisGame.php');

$tennisGame = new TennisGame();

$tennisGame->getInfoOfGame('player1', 'player2', 1, 2);

echo $tennisGame;

