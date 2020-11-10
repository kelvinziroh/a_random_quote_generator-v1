<!-- Access the functions.php file -->
<?php include 'inc/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="30">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>

<!-- Call the variable containing stored random color on the body's background color -->
<?php echo "<body style=\"background-color: $randomColor;\">"; ?> 
  <div class="container">
    <div id="quote-box">

      <!-- Call the printQuote function to print random quote elements -->
      <?php printQuote($quotes); ?> 
    </div>

    <!-- Call the variable containing stored random color on the button's background color -->
    <?php echo "<button id=\"loadQuote\" onclick=\"window.location.reload(true)\" style=\"background-color: $randomColor;\">Show another quote</button>"; ?>
  </div>
<?php echo "</body>"; ?>
</body>
</html>