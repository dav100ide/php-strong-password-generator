<?php
// Define a function to generate a password
function generate_password($length)
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
