<?php
// PHP - Random Quote Generator

// Multidimensional array to store motivational quotes and associated information.
// Each array within the multidimensional array contains a quote and source with optional elements for citation and year.
$quotes = [
          ["quote" => "Creativity is just connecting things.", "source" => "Steve Jobs", "citation" => "WIRED", "year" => "1996"],
          ["quote" => "The greatest glory in living lies not in never falling, but in rising every time we fall.", "source" => "Nelson Mandela", "citation" => "Long Walk to Freedom", "year" => "1995"],
          ["quote" => "Love the life you live. Live the life you love.", "source" => "Bob Marley"],
          ["quote" => "The way to get started is to quit talking and begin doing.", "source" => "Walt Disney"],
          ["quote" => "Every strike brings me closer to the next home run.", "source" => "Babe Ruth", "citation" => "Weird Ideas That Work", "year" => "2001"],
          ["quote" => "You will face many defeats in life, but never let yourself be defeated.", "source" => "Maya Angelou"],
          ["quote" => "The future belongs to those who believe in the beauty of their dreams.", "source" => "Eleanor Roosevelt"],
          ];

// A function to select and return a random quote from the multidimensional array $quotes.
function getRandomQuote($array) {
    // Determine length of array to use when selecting random quote, allows for quotes to be easily added or removed.
    $array_len = count($array) - 1;
    // Generate a random number between 0 and 6 to use for selecting an element of $array.
    $index = rand(0,$array_len);
    // Select quote and store in a variable.
    $rand_quote = $array[$index];
    // return the selected quote
    return $rand_quote;
}

// A function to create the HTML string for displaying randomly selected quote, passed in as an array.
function printQuote($array) {
    // Call getRandomQuote function to return the array of a random quote.
    $rand_quote = getRandomQuote($array);

    // Create variable to store HTML of selected quote.
    $quote_html = "";

    // Add quote and source HTML to the HTML string.
    $quote_html .= "<p class=\"quote\">".$rand_quote["quote"]."</p>
                   <p class=\"source\">".$rand_quote["source"];

    // Check if selected quote has a citation and if so add it to the HTML string.
    if ($rand_quote["citation"]) {
        $quote_html .= "<span class=\"citation\">".$rand_quote["citation"]."</span>";
    }

    // Check if selected quote has a year and if so add it to the HTML string.
    if ($rand_quote["year"]) {
        $quote_html .= "<span class=\"citation\">".$rand_quote["year"]."</span>";
    }

    // Concatenate closing paragraph tag to the HTML string.
    $quote_html .= "</p>";

    // Display the completed HTML string.
    echo $quote_html;
}

?>