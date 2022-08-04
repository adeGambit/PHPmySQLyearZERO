<?php

session_start();

$mailuid = $_POST['mailuid'];//assigns and passes variable via quotes(?)
$password = $_POST['pwd'];
//$mailuid = $_POST['mailuid'];
//$password = $_POST['pwd-repeat'];
//$mailuid = $_POST['mailuid'];
//$password = $_POST['pwd'];



session_unset();
session_destroy();
header("Location: ../index.php");//back to the front page

exit();
