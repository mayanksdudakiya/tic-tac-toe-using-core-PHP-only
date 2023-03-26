<?php

if (!isset($_SESSION)) {
    session_start();
}

include 'functions.php';
include 'controllers/TicTacToeController.php';
include 'views/tic-tac-toe-board.view.php';
