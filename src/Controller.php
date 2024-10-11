<?php

namespace Morsel\Minesweeper\Controller;

use Morsel\Minesweeper\Game;
use Morsel\Minesweeper\View;

function startGame(int $width, int $height, int $mines, bool $saveToDatabase = false): void {
    if ($saveToDatabase) {
        \cli\line("Note: The game is currently not saving to the database.");
    }

    // Создание и запуск игры
    $game = new Game($width, $height, $mines);
    $game->play();
}
