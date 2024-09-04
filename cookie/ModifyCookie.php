<?php

// To modify a cookie, just set (again) the cookie using the setcookie() function.
// Modifying thwe cookie with cookie name.
$cookie_name = 'user';
$cookie_value = 'Lokesh@gmail.com';
$expire = time() + 3600;
$path = '/';
$domain = "";
$secure = true;
$httponly = true;

setcookie($cookie_name, $cookie_value, $expire, $path, $domain, $secure, $httponly);

echo 'Modified the cookie value <br>';
// Check if the cookie is set, and modyifing the cookie value.
if(isset($_COOKIE[$cookie_name])){
    setcookie($cookie_name, 'Php cookie', $expire, $path, $domain, $secure, $httponly);
    echo 'Modified value -> ' . $_COOKIE[$cookie_name] . '<br>';
}
else {
    echo 'Cookie is not set.';
}
