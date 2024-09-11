<?php

// Define the cookie name and value.
$cookie_name = 'user_data';
$cookie_value = 'Rajesh';

// Cookie will expire in 1 hour (3600 seconds).
$expire = time() + 3600;

// Path where the cookie will be available.
$path = "/";

// Secure flag (true means the cookie will only be sent over HTTPS).
$secure = true;

// HttpOnly flag (true means the cookie is only accessible via the HTTP protocol, not JavaScript).
$httponly = true;

setrawcookie($cookie_name, $cookie_value, $expire, $path, "", $secure, $httponly);

// Check if the cookie is set.
if(isset($_COOKIE[$cookie_name])) {
    echo 'Cookie Name: ' . $cookie_name . '<br>';
    echo 'Cookie Value: ' . $_COOKIE[$cookie_name] . '<br>';
    echo 'The Cookie will expire after ' . ($expire - time()) / 3600 . ' hour(s)<br>';
    echo 'It\'s a secure cookie: ' . ($secure ? 'Yes' : 'No') . '<br>';
    echo 'HTTPOnly: ' . ($httponly ? 'Yes' : 'No') . '<br>';
}
else {
    echo 'Cookie is not set!';
}