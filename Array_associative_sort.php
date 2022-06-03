<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sorting in PHP</title>
</head>

<body bgcolor="powderblue">
  <?php
  echo "<h1>Sorting</h1>";
  echo "<h3>Ansh Singh</h3>";

  echo "<h2>asort</h2>";
  $color = array("red=>1", "green=>2", "yellow=>3", "pink=>7", "white=>6", "blue=>5", "silver=>4", "orange=>0");
  asort($color);
  foreach ($color as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
  echo "<h2>arsort</h2>";
  $color = array("red=>1", "green=>2", "yellow=>3", "pink=>7", "white=>6", "blue=>5", "silver=>4", "orange=>0");
  arsort($color);
  foreach ($color as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
  echo "<h2>ksort</h2>";
  $color = array("red=>1", "green=>2", "yellow=>3", "pink=>7", "white=>6", "blue=>5", "silver=>4", "orange=>0");
  ksort($color);
  foreach ($color as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
  echo "<h2>krsort</h2>";
  $color = array("red=>1", "green=>2", "yellow=>3", "pink=>7", "white=>6", "blue=>5", "silver=>4", "orange=>0");
  krsort($color);
  foreach ($color as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
  ?>
</body>

</html>