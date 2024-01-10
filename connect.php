<?php

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'signupfroms';

$conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if(!$conn){
    die("error occured" . mysqli_connect_error());
}

?>