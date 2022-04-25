<?php
include 'connect.php';
// var_dump($_GET['id']);
$stmt = $connect->prepare("SELECT * FROM restaurant_db.menu_items WHERE ID = :id");
$stmt->execute(['id' => $_GET['id']]);

    $data = $stmt->fetch();
    // var_dump($data);
?><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="assets/main.css" rel="stylesheet">

    <head>
<body>
<div class="background">
<form action="editItem.php" method="post" name="edit">
    Id<input type="text" name="Id" id="" value="<?php echo $data ['Id']; ?> " ><br />
    Name<input type="text" name="Name" id=""value=" <?php echo $data ['Name']; ?>"><br />
    Price<input type="text" name="Price" id=""value=" <?php echo $data ['Price']; ?>"><br />
    <button type='submit'>toevoegen</button>

</form>
</div>
</body>
