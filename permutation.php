<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Permutation</title>
  <link rel="stylesheet" type="text/css" href="bootstrap5.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="spacer_20px"></div>
  <div class="container">
    <div class="image-and-text">
      <img src="transition.png" alt="logo" width="40" height="40">
      <h2 class="text">Permutation Calculator</h2>
    </div>
  </div>

  <div class="spacer_20px"></div>
  <div class="container">
    <div class="description">
      <p class="text">Find out the number of ways a set can be arranged</p>
      <div class="spacer_60px"></div>
    </div>
  </div>

  <div class="container text-center form">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $numberN = $_POST["numberN"];
      $numberR = $_POST["numberR"];

      if ($numberN >= $numberR && $numberN >= 0 && $numberR >= 0) {
        function factorial($n) {
          if ($n <= 1) {
            return 1;
          } else {
            return $n * factorial($n - 1);
          }
        }

        $numerator = factorial($numberN);
        $denominator = factorial($numberN - $numberR);

        $permutation = $numerator / $denominator;

        echo "<h2 class='text'>The permutation of {$numberN} and {$numberR} is: {$permutation}</h2>";
        echo "<div class='spacer_20px'> </div>";
        echo "<img src='transform.png' alt='permutation' width='100' height='100'>";
        echo "<div class='spacer_20px'> </div>";
        echo "<p class='text'>Try Again?</p>";
        echo "<div class='spacer_20px'> </div>";
        echo "<div class='btn-group d-flex'>";
        echo "<a href='{$_SERVER['PHP_SELF']}' class='btn btn-yellow yesButton'>Yes</a>";
        echo "<div class='marginAround'></div>";
        echo "<a href='d2.php' class='btn btn-yellow noButton'>No</a>";
      } else {
        echo "<h2 class='text'>Please enter valid values: n should be greater than or equal to r, and both should be non-negative integers.</h2>";
        echo "<div class='spacer_20px'> </div>";
        echo "<p class='text'>Try Again?</p>";
        echo "<div class='spacer_20px'> </div>";
        echo "<div class='btn-group d-flex'>";
        echo "<a href='{$_SERVER['PHP_SELF']}' class='btn btn-yellow yesButton'>Yes</a>";
        echo "<div class='marginAround'></div>";
        echo "<a href='d2.php' class='btn btn-yellow noButton'>No</a>";
      }
    } else {
    ?>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="numberN" class="text">Enter pool size (n):</label>
        <div class="spacer_20px"></div>
        <input type="number" name="numberN" id="numberN" required>

        <div class="spacer_20px"></div>
        <label for="numberR" class="text">Enter set size (r):</label>
        <div class="spacer_20px"></div>
        <input type="number" name="numberR" id="numberR" required>
        <br>
        <input type="submit" value="Calculate" class="btn btn-yellow mt-3">
      </form>
    <?php
    }
    ?>
  </div>
</body>
</html>
