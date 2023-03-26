<?php

namespace controllers;

class TicTacToeController
{
    public array $boardSquares;
    public string $x = 'X';
    public string $o = 'O';

    public function __construct()
    {
        $this->boardSquares = [
            '1' => '', '2' => '', '3' => '',
            '4' => '', '5' => '', '6' => '',
            '7' => '', '8' => '', '9' => '',
        ];

        $this->setBoardSquaresInSession();
    }

    private function setBoardSquaresInSession(): void
    {
        if (!isset($_SESSION['boardSquares'])) {
            $_SESSION['boardSquares'] = $this->boardSquares;
        }
    }

    public function saveUserSelections(array $userInputs)
    {

    }
}

$ticTacToe = new TicTacToeController();
$ticTacToe->saveUserSelections($_POST);
