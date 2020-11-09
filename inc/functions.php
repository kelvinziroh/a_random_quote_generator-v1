<?php 

// PHP - Random Quote Generator
// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

$quotes = array(
    array(
        'quote' => 'Every great developer you know got there by solving problems they were unqualified to solve until they actually did it.',
        'source' => 'Patrick McKenzie',
    ),
    array(
        'quote' => 'No valid plans for the future can be made by those who have no capacity for living now.',
        'source' => 'Alan Watts',
    ),
    array(
        'quote' => 'Good Artists copy, great artists steal.',
        'source' => 'Pablo Picasso',
    ),
    array(
        'quote' => 'Design is not just what it looks like and feels like, design is also how it works.',
        'source' => 'Steve Jobs',
    ),
    array(
        'quote' => 'Not all treasure is silver and gold, mate.',
        'source' => 'Johnny Depp',
    ),
);

/* foreach ($quotes as $key => $quote){
    var_dump($key);
} */


// Create the getRandomQuuote function and name it getRandomQuote
// Create the printQuote funtion and name it printQuote