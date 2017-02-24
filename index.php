<?php
require 'vendor/autoload.php';

use AbcAeffchen\sudoku\Sudoku;

echo(json_encode(Sudoku::generate(9, Sudoku::NORMAL)));
