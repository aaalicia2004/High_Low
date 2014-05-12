<?php

//Get User's first name
//Computer will generate a number
//User will continue to guess the number
//Computer will outputs higher or lower

fwrite(STDOUT, 'What is your first name? ');

// Get the input from user
$first_name = fgets(STDIN);

// Output the user's name
fwrite(STDOUT, "Hello $first_name" . "I'm thinking of a number between 1 and 100.\nCan you guess which one it is?\n");
 


//int rand ( int $min , int $max )