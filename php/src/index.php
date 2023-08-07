<?php

echo 'Current PHP version: ' . phpversion();
echo '<br />';

//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml (phpmyadmin config 
// says by default hostname of database server is 'db')

$host = 'db';
$user = 'root';
$pass = 'password';

// check the MariaDB/MySQL connection status
try{
    $dbh = new pdo( "mysql:host=$host",
                    "$user",
                    "$pass",
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        echo 'Connected to MySQL server successfully!';
}
catch(PDOException $ex){
    die("Connection failed: " . $conn->connect_error);
}

/*
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
*/

?>