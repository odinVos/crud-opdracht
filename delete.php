<?php
include 'connect.php';

if ($_SESSION['loggedin'] == true){
    // echo "Welcome " . $_SESSION['username'];
}else {
    header("Location: admin.php");
}
var_dump($_GET['id']);
$sql = "DELETE FROM restaurant_db.menu_items WHERE Id = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    $stmt->debugDumpParams();
    header("Location:admin.php")
?>  