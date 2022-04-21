<?php
require_once "connect.php";

$sql = "SELECT * FROM restaurant_db.menu_items";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<table>
    <tr>  
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
    </tr>

<?php
foreach ($result as $re) { ?>


    <tr>
        <td><?php echo $re["Id"]; ?></td>
        <td><?php echo $re["Name"]; ?></td>
        <td><?php echo $re["Price"]; ?></td>

    </tr>

<?php
}
?>

</table>