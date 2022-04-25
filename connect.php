<?php


$host = 'localhost';
$db = 'restaurant_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:localhost; dbname=$db charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try
{
    $connect = new PDO($dsn, $user, $pass, $opt);   
    // echo "verbinding is gemaakt.";

    $sql = "SELECT * FROM restaurant_db.menu_items";

   $result = $connect->query($sql);
}

catch (PDOException $e)
{
    echo $e->getMessage();
    die("Sorry database probleem");
}
?>