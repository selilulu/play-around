<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types = 1);

session_start();

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'classes/RockPaperScissors.php';

// Start the game
$game = new RockPaperScissors();
$game->run();
$game->generateRandomNumber();


require 'view.php';

?>
