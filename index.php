<?php
// Define a function to generate a password
function generatePassword($length)
{
   $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$%&*@/!?=#';

   $password = '';

   // Generate a random string of characters of the specified length
   for ($i = 0; $i < $length; $i++) {
      // Pick a random character from the string of possible characters
      $password .= $characters[rand(0, strlen($characters) - 1)];
   }

   return $password;
}

// Check if the "length" parameter is set in the URL
if (isset($_GET['length'])) {
   $password_length = (int)$_GET['length'];
} else {
   $password_length = 8;
}

// Generate a password with the specified length
$password = generatePassword($password_length);


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
      <input type="text" name="length" id="password-len">
      <button type="submit">genera</button>
   </form>
   <h3>ecco la tua password:
      <?php
      echo $password
      ?>
   </h3>
</body>

</html>