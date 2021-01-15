<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load your classes
require_once 'classes/GuessingGame.php';

// Start the game
// As this game is rather simple, one class should be sufficient
$game = new GuessingGame(3);
$game->run();


$inputNumber=$_POST['input'];
$submit=$_POST['submit'];
$secretNumber;



if(isset($_POST['submit'])){

    // check the clicked checkbox
    if(!empty($_POST['input'])){ 

         if ($inputNumber==$secretNumber){
            echo "well done";
         }
         else{
            echo "try again" ;
         }

         
        }
    }











require 'view.php';
