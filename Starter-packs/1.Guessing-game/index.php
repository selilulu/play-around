<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types = 1);

session_start();

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load your classes
require_once 'classes/GuessingGame.php';

// Start the game
// As this game is rather simple, one class should be sufficient
$game = new GuessingGame();


$game->run();














require 'view.php';
