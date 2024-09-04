<?php

// Creating the first cookie.
$cookie_name1 = 'check_cookie';
$cookie_value1 = 'UserCookie@gmail.com';
$expire = time() + 3600;
$path = '/';
$domain = "";
$secure = true;
$httponly = true;

setcookie($cookie_name1, $cookie_value1, $expire, $path, $domain, $secure, $httponly);

// Creating the second cookie.
$cookie_name2 = 'user_info';
$cookie_value2 = 'UserCookieInfo@gmail.com';
$expire = time() + 3600;

setcookie($cookie_name2, $cookie_value2, $expire, $path, $domain, $secure, $httponly);

// Check if any cookies are set
if (count($_COOKIE) > 0) {
    echo 'Cookies are Created.<br>';

    // Loop through the $_COOKIE array and print all cookies
    foreach ($_COOKIE as $key => $value) {
        echo 'Available cookie name: ' . $key . '<br>';
        echo 'Cookie value: ' . $value . '<br>';
    }
} else {
    echo 'Cookies are not enabled.';
}
