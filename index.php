<?php
$password_len = intval($_GET['password_len']);

$chars = [

   'letters' => [
      "A",
      "B",
      "C",
      "D",
      "E",
      "F",
      "G",
      "H",
      "I",
      "J",
      "K",
      "L",
      "M",
      "N",
      "O",
      "P",
      "Q",
      "R",
      "S",
      "T",
      "U",
      "V",
      "W",
      "X",
      "Y",
      "Z",
   ],

   'nums' => [1, 2, 3, 4, 5, 6, 7, 8, 9],

   'symbols' => ['$', '/', ')', '(', '£', '#', '+', '@', '*', '?', '!'],
];


if (!empty($password_len)) {
   for ($i = 0; $i < $password_len; $i++) {
      $password = '';
   }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>password generator</title>
</head>

<body>
   <form method="GET">
      <label for="password-len">digita la lunghezza desiderata</label>
      <input type="text" name="password_len" id="password-len">
      <button type="submit">genera</button>
   </form>
   <h3>ecco la tua password: </h3>
</body>

</html>