<?php

class GuessingGame
{
    public $maxGuesses;
    public $tryOuts=0;
    public $secretNumber;
    public $result;
    


    // TODO: set a default amount of max guesses DONE!
    public function __construct($maxGuesses=4)
    {
        // We ask for the max guesses when someone creates a game
        // Allowing your settings to be chosen like this, will bring a lot of flexibility
        $this->maxGuesses = $maxGuesses;

        if(!empty($_SESSION['secretno'])){
            $this->secretNumber=$_SESSION['secretno'];
        }
        if(!empty($_SESSION['tryOuts'])){
            $this->tryOuts=$_SESSION["tryOuts"];
        }
        
    }
    
    public function run()
    {
        if(empty($this->secretNumber)){
            $this->generateSecretNumber();
        }

        if(!empty($_POST['input'])){
            $this->tryOuts++;
            if($_POST['input']==$this->secretNumber){
                $this->playerWins();

            }else if ($_POST['input'] > $this->secretNumber){
                $this->lower();
            }else if ($_POST['input'] < $this->secretNumber){
                $this->higher();
            }
            
        }
        $_SESSION['tryOuts']=$this->tryOuts;

        if($this->tryOuts >= $this->maxGuesses){
            $this->playerLoses();
            
        }

    }

    public function generateSecretNumber()
    {
        $this->secretNumber=rand(1,10);
        $_SESSION['secretno']=$this->secretNumber;
    }


    public function playerWins()
    {
        // TODO: show a winner message (mention how many tries were needed)
        
             $this->result= "You WON!Well done buddy.The secret number was indeed {$this->secretNumber}";
             $this->reset();

        

    }

    public function playerLoses()
    {
        
        $this->result= "Ups,you lost..Secret number was {$_SESSION['secretno']}.Try again.";
        $this->reset();
        
    }

    public function higher(){  

        $this->result= "The secret number is higher!";
            
    }
    public function lower (){

        $this->result="The secret number is lower!";

    }
    


    public function reset()
    {
        // TODO: Generate a new secret number and overwrite the previous one
        
        $_SESSION['tryOuts']=0;
        $this->tryOuts=0;
        $this->generateSecretNumber();
    }
}
$game = New GuessingGame;



