<?php

 /*
    Http methods
    GET, POST, PUT, PATCH, DELETE

    Super Global Variable
    $_SERVER
    $_GET, $_POST
    $_SESSION
    $_COOKIE
*/
echo "<pre>";
print_r($_SERVER['QUERY_STRING']); //information related to the server + calling query string from URL
echo "<pre>";
print_r($_SERVER['PATH_INFO']);     
print_r($_GET); // display with asso array (key & value)

echo $_GET['name'];
echo $_GET['age']; // only data(value) displayed

if (isset($_GET['age'])) [
    echo $_GET['age']
]