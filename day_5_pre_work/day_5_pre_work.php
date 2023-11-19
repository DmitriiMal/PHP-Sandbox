<!DOCTYPE html>
<html>

<body>
  <?php
  $str = "\t\t\n PHP Validators are useful tools\n\t ";
  echo "Original value:" . $str . "\n";
  echo "<br>";
  echo "Trimmed value:"  . trim($str);

  ?>

  <hr>
  <?php
  $test_var_a = "<br><p><a href='file.php'>PHP Validators</a></p>";
  echo htmlspecialchars($test_var_a);
  echo $test_var_a;
  ?>

  <br>
  <?php
  $url = "https://www.codefactory.wien";
  echo (filter_var($url, FILTER_VALIDATE_URL) ? "valid" : "invalid"); // it will print: valid
  ?>

  <br>
  <?php


  ?>

</body>

</html>