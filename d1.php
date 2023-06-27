<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dwarf or Not Dwarf</title>
  <link rel="stylesheet" type="text/css" href="bootstrap5.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="spacer_20px"></div>
  <div class="container">
    <div class="image-and-text">
      <img src="dwarf.png" alt="logo" width="40" height="40">
      <h2 class="text">Dwarf or Not Dwarf</h2>
      <a href="help.html">
        <img src="information.png" class="infoIcon" alt="logo" width="25" height="25">
      </a>
    </div>
  </div>

  <div class="spacer_20px"></div>
  <div class="container">
    <div class="description">
      <p class="text">Find out if a number is a dwarf or not</p>
      <div class="spacer_60px"></div>
    </div>
  </div>

  <div class="container text-center form">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $number = $_POST["number"];
      $sum = 0;

      for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
          $sum += $i;
        }
      }

      if ($sum == $number) {
        echo "<h2 class='text'>{$number} is a dwarf number</h2>";
        echo "<p class='text'>Try Again?</p>";
        echo "<div class='spacer_20px'> </div>";
        echo "<div class='btn-group d-flex'>";
        echo "<a href='{$_SERVER['PHP_SELF']}' class='btn btn-yellow yesButton'>Yes</a>";
        echo "<div class='marginAround'></div>";
        echo "<a href='d2.php' class='btn btn-yellow noButton'>No</a>";
      } else {
        echo "<h2 class='text'>{$number} is not a dwarf number</h2>";
        echo "<p class='text'>Try Again?</p>";
        echo "<div class='spacer_20px'> </div>";
        echo "<div class='btn-group d-flex'>";
        echo "<a href='{$_SERVER['PHP_SELF']}' class='btn btn-yellow yesButton'>Yes</a>";
        echo "<div class='marginAround'></div>";
        echo "<a href='d2.php' class='btn btn-yellow noButton'>No</a>";
        echo "</div>";
        
      }
    } 
    
    else {
    ?>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="number" class="text">Enter a number:</label>
        <div class="spacer_20px"></div>
        <input type="number" name="number" id="number" required>
        <br>
        <input type="submit" value="Check" class="btn btn-yellow mt-3">
      </form>
    <?php
    }
    ?>
  </div>
</body>
</html>
