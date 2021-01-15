<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Casino royale - guessing game</title>
</head>
<body>

<!-- Must-have features
A secret number will be generated. To make things fair, the number should be between 1 and (learners in the class)
A user can enter a guess (what html element can be useful for this?)
When he or she pushes the "play" button, the number will be compared to the secret number
Depending on the outcome, an alert box will show:
Awesome! You number (actual number) was correct. You can be named many things, hungry not being one of them.
Bummer... You guessed (guess) and the secret number was (secret number).
Nice-to-have features
When a guess was just one number from the secret number, show another message: "So close, but you just missed it! Are you in a class that started on the thirteenth or what?"
 -->

 <form action="" method="POST">
 
 Make Your Guess:<input type ="number" name="input" placeholder="Enter a number" onkeyup="check(this)" value="0" data-max="6"  ></input>
 <!-- <input name="amount" value="0" data-max="3" onkeyup="check(this);"/> -->

 <input type="submit" name="submit" value="Enter" ></input>

 
 </form>

 </body>
</html>