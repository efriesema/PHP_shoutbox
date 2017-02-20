<?php
//Connect to MySQL "shoutit" database using mysqli
$con = mysqli_connect("localhost","root","kevlarMC01","shoutit");

//Test connection and return error message if failed
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}
