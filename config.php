<?php

$dbhost = "localhost";
$dbname = "alodokter";
$dbuser = "root";
$dbpassword = "";

try {
    $pdo = new PDO("mysql:host={$dbhost}; dbname={$dbname}", $dbuser, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connection Error Bro..." . $exception->getMessage();
} finally {
    echo "Connection Success Bro...";
}

?>