<?php 

// PHP - Random Quote Generator
// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

$quotes = array(
    array(
        'quote' => 'Every great developer you know got there by solving problems they were unqualified to solve until they actually did it.',
        'source' => 'Patrick McKenzie',
        'citation' => 'Twitter',
        'year' => '2016',
    ),
    array(
        'quote' => 'No valid plans for the future can be made by those who have no capacity for living now.',
        'source' => 'Alan Watts',
        'citation' => '',
        'year' => '',
    ),
    array(
        'quote' => 'Good artists copy, great artists steal.',
        'source' => 'Pablo Picasso',
        'citation' => '',
        'year' => '',
    ),
    array(
        'quote' => 'Design is not just what it looks like and feels like, design is also how it works.',
        'source' => 'Steve Jobs',
        'citation' => '',
        'year' => '',
    ),
    array(
        'quote' => 'Not all treasure is silver and gold, mate.',
        'source' => 'Johnny Depp (Capt. Jack Sparrow)',
        'citation' => 'Pirates of The Carribean: The Curse of the Black Pearl',
        'year' => '2003',
    ),
    array(
        'quote' => 'It does not do well to dwell on dreams and forget to live.',
        'source' => 'Albus Dumbledore',
        'citation' => 'Harry Potter and The Sorcerer\'s Stone',
        'year' => '2001',
    ),
    array(
        'quote' => 'That there\'s some good in this world, Mr. Frodo… and it\'s worth fighting for.',
        'source' => 'Samwise Gamgee',
        'citation' => 'The Lord of the Rings: The Fellowship of the Ring',
        'year' => '2001',
    ),
    array(
        'quote' => 'There is only one who is all powerful, and his greatest weapon is love.',
        'source' => 'Stan Lee',
        'citation' => '',
        'year' => '',
    ),
    array(
        'quote' => 'Jarvis, sometimes you gotta run before you can walk.',
        'source' => 'Robert Downey Jr (Tony Stark)',
        'citation' => 'Iron Man',
        'year' => '2008',
    ),
    array(
        'quote' => 'Forget Unicorns. Startups Should Be Camels.',
        'source' => 'Alex Lazarow',
        'citation' => 'Out-Innovate',
        'year' => '2020',
    ),
);

// Create an array of colors
$bgColors = array('#f7ce68', '#fc00ff', '#00dbde', '#2b86c5', '#36b55c');

// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuote($arr){
    $quoteIndex = random_int(0, 9);
    foreach ($arr as $key => $quote){
        if ($quoteIndex === $key){
            return $quote;
        }
    }
}

// Create the printQuote funtion and name it printQuote
function printQuote($arr){
    $randomQuote = getRandomQuote($arr);
    $quoteString = '';

    if ($randomQuote['citation'] && $randomQuote['year']){  // Prints the quote citation and year if both are present 
        $quoteString .= "<p class='quote'>" . $randomQuote['quote'] . "</p>";
        $quoteString .= "<p class='source'>" . $randomQuote['source'];
        $quoteString .= "<span class='citation'>" . $randomQuote['citation'] . "</span>";
        $quoteString .= "<span class='year'>" . $randomQuote['year'] . "</span>";
        $quoteString .= "</p>";
    } else if ($randomQuote['citation']){ // Prints the quote citation if only citation is set
        $quoteString .= "<p class='quote'>" . $randomQuote['quote'] . "</p>";
        $quoteString .= "<p class='source'>" . $randomQuote['source'];
        $quoteString .= "<span class='citation'>" . $randomQuote['citation'] . "</span>";
        $quoteString .= "</p>";
    } else if ($randomQuote['year']){ // Prints the quote year if only the year is set
        $quoteString .= "<p class='quote'>" . $randomQuote['quote'] . "</p>";
        $quoteString .= "<p class='source'>" . $randomQuote['source'];
        $quoteString .= "<span class='year'>" . $randomQuote['year'] . "</span>";
        $quoteString .= "</p>";
    } else { // prints the quote and it's source if neither citation or date are given
        $quoteString .= "<p class='quote'>" . $randomQuote['quote'] . "</p>";
        $quoteString .= "<p class='source'>" . $randomQuote['source'] . "</p>";
    }
    
    echo $quoteString;
}