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
        'source' => 'Johnny Depp',
        'citation' => 'Pirates of The Carribean: The Curse of the Black Pearl',
        'year' => '2003',
    ),
);

// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuote($arr){
    $quoteIndex = random_int(0, 4);
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