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
    if (isset($_SESSION['loggedin'])){
        require_once("components/navigation/adminnavbar.php");
    }else {
        require_once("components/navigation/customernavbar.php");
    }
    ?>
    <header> 
        <div class="container">
            <div class="welcome">
                <h1>Cafetaria/Lunchroom Diva</h1>
                <hr>
                <span>


                Bestel nu de lekkerste broodjes, spareribs en snacks bij Cafetaria/Lunchroom Diva in Nijmegen. Altijd vers, met liefde voor u bereid en binnen no time bij u thuis!. U kunt ook eens bij ons langskomen en genieten van ons heerlijke terras onder het genot van een lekkere schepijsje!

                </span>
                <hr>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="menu row">
            <h1>Menu Kaart</h1>
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