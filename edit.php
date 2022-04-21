<?php
include 'connect.php';
var_dump($_GET['id']);
$stmt = $connect->prepare("SELECT * FROM restaurant_db.menu_items WHERE ID = :id");
$stmt->execute(['id' => $_GET['id']]);

    $data = $stmt->fetch();
    var_dump($data);
    if(isset($_POST["toevoegen"])){
        $sql ="UPDATE restuarant_db.menu_items SET
        Id = :Id,
        Name = :Name,
        Price = :Price,
        WHERE ID = :Id
        ";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':Id', $_POST['Id']);
        $stmt->bindParam(':Name', $_POST['Id']);
        $stmt->bindParam(':Price', $_POST['Id']);
        $stmt->execute();
    }
?>

<form action="" method="post">
    Id<input type="text" name="Id" id="" value="<?php echo $data ['Id']; ?> " ><br />
    Name<input type="text" name="Name" id=""value=" <?php echo $data ['Name']; ?>"><br />
    Price<input type="text" name="Price" id=""value=" <?php echo $data ['Price']; ?>"><br />
    <button onclick="document.location='admin.php'">toevoegen</button>

</form>