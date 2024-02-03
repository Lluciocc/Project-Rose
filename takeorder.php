<?php

$username = "$IONOS_DB_USERNAME";
$password = "$IONOS_DB_PASSWORD";
$db = $IONOS_DB_NAME;

$dbconnect=mysqli_connect("localhost",$username,$password,$db,3306);
