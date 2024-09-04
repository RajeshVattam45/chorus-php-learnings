<?php

// Creating a new cookie.
$cookie_name = 'user_info';
$cookie_value = 'User@gmail.com';
$expire = time() + 3600;
$path = '/';
$domain = "";
$secure = true;
$httponly = true;

setcookie($cookie_name, $cookie_value, $expire, $path, $domain, $secure, $httponly);

echo 'Cookie has been set <br>';

// Deleting the cookie by setting the Expiration Time.
setcookie($cookie_name, '', time() - 3600, $path, $domain, $secure, $httponly);
echo 'Cookie has been deleted';
