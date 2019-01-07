<?php
function number($number1 = 2, $number2 = 4, $number3 = 1){
  return $number1 + $number2 + $number3;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>php partie4</title>
</head>
<body>
  <p><?= number(); ?></p>
</body>
</html>
