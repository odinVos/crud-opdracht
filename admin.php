<?php
// Initialize the session
session_start();
 require_once("helpers/dbconfig.php");

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
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

    <?php 
        require_once("components/navigation/adminnavbar.php");
    ?>

    <div class="container">
        <?php 
            require_once("components/admin/menutable.php");
        ?>

        <div class="mt-3">
            <p>
                <a href="newitem.php?id=<?php echo $re["Id"]; ?>">
                <button class="btn btn-success mx-1"><i class="fa-solid fa-plus"></i> Add new menu item</button></a>
            </p>
            <p>
                <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
            </p>

        </div>
    </div>

</body>
</html>