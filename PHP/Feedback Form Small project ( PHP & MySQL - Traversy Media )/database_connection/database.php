<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'FB');
define('DB_PASS', '1234');
define('DB_NAME', 'my_database');

// Create connection : 

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check the connection :

if ($connection->connect_error) {
    die('Connection Failed' . $connection->connect_error);
}

//echo "Connected!";
