<?php
include 'connect.php';
var_dump($_GET['id']);
$stmt = $connect->prepare("SELECT * FROM restaurant_db.menu_items WHERE ID = :id");
$stmt->execute(['id' => $_GET['id']]);

    $data = $stmt->fetch();
    var_dump($data);
?>

<form action="editItem.php" method="post" name="edit">
    Id<input type="text" name="Id" id="" value="<?php echo $data ['Id']; ?> " ><br />
    Name<input type="text" name="Name" id=""value=" <?php echo $data ['Name']; ?>"><br />
    Price<input type="text" name="Price" id=""value=" <?php echo $data ['Price']; ?>"><br />
    <button type='submit'>toevoegen</button>

</form>