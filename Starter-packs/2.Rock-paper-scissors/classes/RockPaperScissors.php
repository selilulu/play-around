<?php

class RockPaperScissors
{      
    public $usersChoice;
    public $computersChoice;
    public $compScore=0;
    public $userScore=0;
    public $result;
    
    // if(isset($_POST["submit"]))
    // {
    //     $this->usersChoice=$_POST['name'];
    //     $this->game();

    //     if(!empty($_SESSION["userScore"]))
    //     {
    //     $this->userScore=$_SESSION["userScore"];

    //     }

    //     if(!empty($_SESSION["compScore"]))
    //     {
    //     $this->compScore=$_SESSION["compScore"];
    //     }
    // }
    //     $_SESSION["userScore"]=$this->userScore; // can we use this line above in the if statement ? 
    //     $_SESSION["compScore"]=$this->compScore;



    public function run(){

      if(isset($_POST['submit'])){
          $this->usersChoice=$_POST['name'];
          $this->game();


            if(!empty($_SESSION['userScore'])){
              $this->userScore=$_SESSION['userScore'];
            }
            
            if(!empty($_SESSION['compScore'])){
                $this->compScore=$_SESSION['compScore'];
            }

      }
            $_SESSION["userScore"]=$this->userScore; 
            $_SESSION["compScore"]=$this->compScore;


        
    }
    public function generateRandomNumber()
    {
        return rand(0,7);

    }


    public function game (){

        if(!empty($_POST['name'])) {
           

            $elements=array('ROCK','PAPER','SCISSORS',"ROCK","SCISSORS","PAPER","PAPER","ROCK");
            $computersChoice=$elements[$this->generateRandomNumber()];     //array_rand () look it up      
            $this->computersChoice=$computersChoice;
  
            if ($_POST["name"]== "rock"){

            if($this->computersChoice=="PAPER"){
                $this->result ='Computer Wins!';
                $_SESSION['compScore']++;
            }
            if($this->computersChoice=="SCISSORS"){
                $this->result ='You Win!';
                $_SESSION["userScore"]++;
            }
            if( $this->computersChoice=="ROCK"){
                $this->result="Its a tie!";

            }
            }
            

            if($_POST['name']=="paper")
            {
                if($this->computersChoice=="SCISSORS"){
                $this->result="Computer Wins!";
                $_SESSION['compScore']++;
            }
            if ($this->computersChoice=="ROCK")
            {
                $this->result="You Win";
                $_SESSION["userScore"]++;
            }
            if($this->computersChoice=="PAPER")
            {
                $this->result="It's a tie!";
            }
        }
            

            if($_POST["name"]=="scissors"){
            
            if($this->computersChoice=="ROCK"){
                $this->result="Computer Wins!";
                $_SESSION['compScore']++;
            }
            if( $this->computersChoice=="PAPER")
            {
                $this->result="You Win!";
                $_SESSION['userScore']++;
            }
            if( $this->computersChoice=="SCISSORS")
            {
                $this->result="It's a tie!";
              


            }
            
    }
}

    }
}

            // if($this->usersChoice=="scissors" && $this->computersChoice=="PAPER" ||
            //   $this->usersChoice=="paper" && $this->computersChoice=="ROCK"|| 
            //   $this->usersChoice=="rock" && $this->computersChoice=="SCISSORS"
            
              
            //     echo "YOU WIN!";
            //     $_SESSION'userScore'++;
            
            // }
            // if ($this->computersChoice=="scissors" && $this->usersChoice=="PAPER" ||
            // $this->computersChoice=="paper" && $this->usersChoice=="ROCK"|| 
            // $this->computersChoice=="rock" && $this->usersChoice=="SCISSORS" )
            // {   
            
            //     echo "COMPUTER WINS!";
            //     $_SESSION['compScore']++;
            // }
            // if($this->usersChoice=="scissors" && $this->computersChoice=="SCISSORS" ||
            // $this->usersChoice=="paper" && $this->computersChoice=="PAPER"|| 
            // $this->usersChoice=="rock" && $this->computersChoice=="ROCK" )
            // {
            //   echo "That's a tie!";
            // }

        