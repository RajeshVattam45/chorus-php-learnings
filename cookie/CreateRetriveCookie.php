<?php

// Creating a new cookie.
$cookie_name = 'user';
$cookie_value = 'Rajesh@gmail.com';
$expire = time() + 3600;
$path = '/';
$domain = "";
$secure = true;
$httponly = true;

setcookie($cookie_name, $cookie_value, $expire, $path, $domain, $secure, $httponly);

// Retriving the cookie.
if(isset($_COOKIE[$cookie_name])){
    echo 'Name of the cookie ' . $cookie_name . '<br>';
    echo 'Value of the cookie ' . $_COOKIE[$cookie_name] . '<br>';
    echo 'The Cookie will expire after ' . ($expire - time()) / 3600 . ' hour(s)<br>';
    echo 'It\'s a secure cookie: ' . ($secure ? 'Yes' : 'No') .'<br>';
    echo 'HttpOnly: ' . ($httponly ? 'Yes' : 'No') . '<br>';
}
else {
    'Error';
}