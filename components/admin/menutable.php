
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
        <td>

        <a href="edit.php?id=<?php echo $re["Id"]; ?>"> 
        <button class="btn btn-secondary mx-1"><i class="fa-solid fa-pencil"></i> edit</button></a>
        <a href="delete.php?id=<?php echo $re["Id"]; ?>">
        <button class="btn btn-danger mx-1"><i class="fa-solid fa-trash"> delete</i></button></a>


        </td>
    </tr>

<?php
}
?>
</table>


<!-- <table class="table table-hover">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>name1</td>
      <td>name2</td>
      <td class="d-flex flex-row-reverse">
          <button class="btn btn-danger mx-1"><i class="fa-solid fa-trash"></i></button>
          <button class="btn btn-secondary mx-1"><i class="fa-solid fa-pencil"></i></button>
          <button class="btn btn-primary mx-1"><i class="fa-solid fa-eye"></i></button>
      </td>
    </tr>
  </tbody>
</table>
 -->
