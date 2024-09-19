<?php

setcookie('Rajesh', 'Rajesh@gmail.com', time() + 3600, '/');

if ($_COOKIE['Rajesh']){
    echo 'cookie is set';
}
else {
    echo 'cookie not set';
}
