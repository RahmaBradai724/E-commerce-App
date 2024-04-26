<?php
// Check if cookies are enabled
if (isset($_COOKIE['test_cookie'])) {
    $cookieEnabled = true;
} else {
    $cookieEnabled = false;
}

// Set a test cookie to check if it's being accepted
setcookie('test_cookie', 'test', time() + 3600, '/');


// Check if the test cookie was set and accepted
if (isset($_COOKIE['test_cookie'])) {
    $cookieAccepted = true;
} else {
    $cookieAccepted = false;
}


// Output the results
echo 'Cookies are ' . ($cookieEnabled ? 'enabled' : 'disabled') . ' in your browser.<br>';
echo 'Test cookie was ' . ($cookieAccepted ? 'accepted' : 'not accepted') . '.';
echo $_COOKIE['user-role-admin'];
echo $_COOKIE['user-role-guest'];

?>