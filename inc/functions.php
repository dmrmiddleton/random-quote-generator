// PHP - Random Quote Generator
//Create PHP open tag
<?php

// Multidimensional array to store motivational quotes and associated information.
// Each array within the multidimensional array contains a quote and source with optional elements for citation and year.
$quotes = [
          ["quote" => "Creativity is just connecting things.", "source" => "Steve Jobs", "citation" => "WIRED", "year" => "1996"],
          ["quote" => "The greatest glory in living lies not in never falling, but in rising every time we fall.", "source" => "Nelson Mandela", "citation" => "Long Walk to Freedom", "year" => "1995"],
          ["quote" => "Love the life you live. Live the life you love.", "source" => "Bob Marley"],
          ["quote" => "The way to get started is to quit talking and begin doing.", "source" => "Walt Disney"],
          ["quote" => "Every strike brings me closer to the next home run.", "source" => "Babe Ruth", "citation" => "Weird Ideas That Work", "year" => "2001"],
          ["quote" => "You will face many defeats in life, but never let yourself be defeated.", "source" => "Maya Angelou"],
          ["quote" => "TThe future belongs to those who believe in the beauty of their dreams.", "source" => "Eleanor Roosevelt"],
          ];


// A function to select and return a random quote from the multidimensional array $quotes.
function getRandomQuote($array) {
    // Generate a random number between 0 and 6 to use for selecting an element of $array.
    $index = rand(0,6);
    // Select quote and store in a variable.
    $rand_quote = $array[$index];
    // return the selected quote
    return $rand_quote;
}


// Create the printQuote funtion and name it printQuote

?>