<?php
include 'connect.php';

if(isset($_POST["Name"])){ 
    $sql = "INSERT INTO restaurant_db.menu_items
    (Name, Price) 
        VALUES 
    (:Name, :Price)";
;

$stmt = $connect->prepare($sql);
$stmt->bindParam(":Name", $_POST['Name']);
$stmt->bindParam(":Price", $_POST['Price']);
$stmt->execute();
$stmt->debugDumpParams();
header("Location: admin.php")

;}
?>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="assets/main.css" rel="stylesheet">
</head>
<body>
<div class="background" >

    <form action="" method= "post">
        naam<input type="text" name="Name" id=""><br/>
        Prijs<input type="text" name="Price" id=""><br/>
        submit<input type="submit" name="toevoegen" id="">

    </form>
</div>
</body>
</html>

