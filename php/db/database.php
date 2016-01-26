<?php

$host = 'localhost'
$user = 'root'
$pass = ''
$databe = 'fakultet'

$db = new mysqli($host, $user, $pass, $databe);

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

?>