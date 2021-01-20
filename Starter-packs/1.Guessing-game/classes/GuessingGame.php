<?php

class GuessingGame
{
    public $maxGuesses;
    public $secretNumber;
    public $inputNumber;
    public $tryOuts=0;
    public $submit;
    


    // TODO: set a default amount of max guesses DONE!
    public function __construct($maxGuesses=4)
    {
        // We ask for the max guesses when someone creates a game
        // Allowing your settings to be chosen like this, will bring a lot of flexibility
        $this->maxGuesses = $maxGuesses;
        
    }
    public function generateSecretNumber()
    { 
        return rand(1,10);

    }

    public function run()
    {
        // This function functions as your game "engine"
        // It will run every time, check what needs to happen and run the according functions (or even create other classes)

        // TODO: check if a secret number has been generated yet
        // --> if not, generate one and store it in the session (so it can be kept when the user submits the form)
        // TODO: check if the player has submitted a guess
        // --> if so, check if the player won (run the related function) or not (give a hint if the number was higher/lower or run playerLoses if all guesses are used).
        // TODO as an extra: if a reset button was clicked, use the reset function to set up a new game
        

        if(isset($_POST['submit']))
        {   if(empty($_SESSION['x'])){
            $this->secretNumber=$this->generateSecretNumber();
            $_SESSION['x']=$this->secretNumber;
        }
            var_dump($_SESSION['x']);
            if(isset($_SESSION["tryOuts"]))
            {
               
                $_SESSION["tryOuts"]++;

            }

            else
            {

                $_SESSION["tryOuts"] = $this->tryOuts;
            }
            // var_dump($this->tryOuts);

            if($_SESSION["tryOuts"] >= $this->maxGuesses){
                session_destroy();
            }

            $this->tryOuts = $_SESSION["tryOuts"];
            // check the clicked checkbox
            var_dump( $_SESSION["tryOuts"]);




            if(!empty($_POST['input']))
            {    $this->higher();
                // CHECK T$this->tryOuts++;  


                if ($_POST['input']==$_SESSION['x'] )
                {
                    
                    $this->playerWins();
                }
                else
                {
                     $this->playerLoses();
                }   
            }

        }

    //   var_dump($this->inputNumber);
    //    var_dump($this->secretNumber);
      


    }

    public function playerWins()
    {
        // TODO: show a winner message (mention how many tries were needed)
        
             echo "You WON!Well done buddy";

        

    }

    public function playerLoses()
    {
        // TODO: show a lost message (mention the secret number)
        if($_SESSION['x']!== $_POST["input"] )
        {
                echo "Ups,you lost..Secret number was {$this->secretNumber}.Try again.";
        }
    }

    public function higher()
    {  
        if($_SESSION["x"] >  $_POST["input"]){
            echo "The secret number was higher!";
        }
        else echo "The secret number was lower!";
            
    }
    


    public function reset()
    {
        // TODO: Generate a new secret number and overwrite the previous one
        // $this->generateSecretNumber(22,27);
    }
}
$game = New GuessingGame;



