<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- EXTRA CREDIT - http-equiv attribute added to autmoatically refresh the page every 5 seconds -->
  <meta http-equiv="refresh" content="5">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container">
    <div id="quote-box">
      <!-- functions.php included and the printQuote function called. -->
      <?php 
        include 'inc/functions.php';
        printQuote($quotes);
      ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>