<?php
include 'connect.php';

echo $_POST['Id'];
echo $_POST['Name'];
echo $_POST['Price'];

   
        $sql ="UPDATE restaurant_db.menu_items SET
        Name = :Name,
        Price = :Price
        WHERE Id = :Id
        ";

        $stmt = $connect->prepare($sql);
        
        $stmt->bindParam(':Name', $_POST['Name']);
        $stmt->bindParam(':Price', $_POST['Price']);
        $stmt->bindParam(':Id', $_POST['Id']);
        $stmt->execute();
        header("location: admin.php");
    
?>

