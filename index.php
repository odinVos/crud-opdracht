<?php
// require_once("connect.php");
session_start();
require_once("helpers/dbconfig.php");

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
    if ($_SESSION['loggedin'] == true){
        require_once("components/navigation/adminnavbar.php");
    }else {
        require_once("components/navigation/customernavbar.php");
    }
    ?>
    <header> 
        <div class="container">
            <div class="welcome">
                <h1>feugiat</h1>
                <hr>
                <span>
                     venenatis nunc bibendum massa faucibus, id fringilla odio ultricies. Integer scelerisque
                    consequat urna, a feugiat felis pellentesque vitae. Ut quis porttitor purus. Donec ipsum lorem,
                    auctor nec mollis ac, porta et orci. Ut eget mi eu orci aliquet maximus eu at massa. Ut pretium sit
                    amet turpis quis mattis. Sed non eros sit amet dolor commodo tristique. Duis rhoncus velit sit amet
                    risus maximus congue. Phasellus et nulla id orci finibus vehicula eget ac neque. Morbi ac neque eu
                    dui maximus gravida. Aliquam pellentesque a turpis quis ornare.

                </span>
                <hr>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="menu row">
        <?php 
            require_once("menuItemList.php");
        ?>
        </div>  
    </div>






    <script src="/assets/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>


</html>