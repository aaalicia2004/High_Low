<?php

//Get User's first name
//Computer will generate a number
//User will continue to guess the number
//Computer will outputs higher or lower

$Winning_Number = rand(1, 100);
$Number_of_Guesses = 1;

fwrite(STDOUT, 'What is your first name? ');

// Get the input from user
$first_name = fgets(STDIN);

// Output the user's name
fwrite(STDOUT, "Hello $first_name" . "I'm thinking of a number between 1 and 100.\nCan you guess which one it is?\n");
 
$User_Guess = fgets(STDIN);

while($User_Guess != $Winning_Number)
{
	if($User_Guess < $Winning_Number)
	{
		echo "Higher";
	}
	else 
	{
		echo "Lower";
	}
fwrite(STDOUT, "Guess again!\n");
$User_Guess = fgets(STDIN);
$Number_of_Guesses++;
}

if ($User_Guess == $Winning_Number)
{
	echo "Winner Winner Chicken Dinner. It took you {$Number_of_Guesses} guesses!" . PHP_EOL
	;
}
