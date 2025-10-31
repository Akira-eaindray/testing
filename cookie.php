<?php

session_start();
$_SESSION['name'] = 'akk';
echo $_SESSION['name'];
session_destroy();

setcookie('name', 'akk', time()+(60*60*24));
// how long will cookie last for starting from current time (it will be deleted after)
echo 'success set'; 