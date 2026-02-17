<?php
//set cookie
setcookie('username', 'Blaise', time() + 86400); // Expires in 1 day
// setcookie('username', '', time() - 86400); // Expire the cookie
if (isset($_COOKIE['username'])) {
    echo "Welcome back, " . $_COOKIE['username'] . '!';
} else {
    echo "Hello, new visitor!";
}
setcookie('username', '', time() - 86400); // Expire the cookie
