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


echo "<table class='table table-borderless'>";
echo "<tr><th>Id</th><th>Name</th><th>Price</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
      parent::__construct($it, self::LEAVES_ONLY);
    }
  
    function current() {
      return "<td>" . parent::current(). "</td>";
    }

    function beginChildren(): void
    {
        echo "<tr>";
    }
  
    function endChildren(): void {
      echo "</tr>" . "\n";
    }
  }

  try
  {
    $connect = new PDO($dsn, $user, $pass, $opt);   
    
    $stmt = $connect->prepare("SELECT * FROM restaurant_db.menu_items");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
      echo $v;
    }

  }
  catch (PDOException $e)
  {
      echo $e->getMessage();
      die("Sorry database probleem");
  }
echo "</table>";
?>