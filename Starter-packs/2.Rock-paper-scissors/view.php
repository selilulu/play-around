<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<style>
	<?php include 'style.css'; ?>
	</style>
	<title>Casino royale - rock, paper, scissors</title>
</head>
<body>

<h1>rock paper scissors</h1>


<div class="computer-choice">
	
	<h3>This computer chose : <?php echo $game->computersChoice ?></h3>
	<h3>User chose : <?php echo $game->usersChoice?></h3>
</div>


<div class="scoreboard">
	<p>Your score : <?php echo $game->userScore ?> - Computer score : <?php echo $game->compScore  ?>  </p>
</div>

<div class="result" >
	<p><?php echo $game->result ?> </p>
</div>
<div class="checkbox">


<form method="POST">

<input type="checkbox" name="name" value="rock" id="rock" ><img src="rock.png"width='50px'></input>
<input type="checkbox" name="name" value="paper" id="paper"><img src="paper.png"width='50px'></input>
<input type="checkbox" name="name" value="scissors"id="scissors"><img src="scissors.png"width='50px'></input>

<!-- <a href="?element=rock">rock</br><img src="paper.png" width="50px"></a>
<a href="?element=paper">paper</br><img src="rock.png" width="50px"></a>
<a href="?element=scissors">scissors</br><img src="scissors.png" width="50px"></a> -->

</div>
<hr>

<div class="submit">
<input type="submit" name="submit" value="submit">
</div>
</form>





</body>
</html>