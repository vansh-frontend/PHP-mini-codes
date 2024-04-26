<?php

// $_SESSION();

session_start();

$_SESSION['name'] = 'vansh';
$_SESSION['age'] = 20;

session_write_close();

print_r($_SESSION);


?>