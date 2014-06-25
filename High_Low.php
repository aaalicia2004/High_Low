<?php


$min = $argv[1];
$max = $argv[2];
$Winning_Number = rand($min, $max);
$Number_of_Guesses = 1;

fwrite(STDOUT, 'What is your first name? ');

// Get the input from user
$first_name = fgets(STDIN);

// Output the user's name
fwrite(STDOUT, "Hello $first_name" . "I'm thinking of a number between $min and $max.\nCan you guess which one it is?\n");
 
$User_Guess = fgets(STDIN);

while($User_Guess != $Winning_Number)
{
	if($User_Guess < $Winning_Number)
	{
	    echo "Higher\n";
	}
	else 
	{
	    echo "Lower\n";
	}
    fwrite(STDOUT, "Guess again!\n");
    $User_Guess = fgets(STDIN);
    $Number_of_Guesses++;
}

if ($User_Guess == $Winning_Number)
{
    echo "Winner Winner Chicken Dinner. It took you {$Number_of_Guesses} guesses!" . PHP_EOL;
}
//Steps to create the game:
//Get User's first name
//Computer will generate a number
//User will continue to guess the number
//Computer will outputs higher or lower

//create a number
//while the user hasn't guessed correctly
	//prompt user to guess a number

	//get a guess from the user

	//check the number and the guess

	//if the guess is higher than the number then tell the user to guess "Lower"
	//if the guess is lower than the number then tell the user to guess "Higher"
	//keep track of the number of guesses the user has used and add to the guess count

//end the loop

	//if the guess and the number are the same say "winner!"" and end the game"

//End the game
?>
