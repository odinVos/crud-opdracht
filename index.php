<?php
require_once("connect.php");

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
    <link href="assets/main.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="test.php">test</a>
                    </li>

                    <a class="nav-link disabled" href="#" tabindex="-1" ariDisableda-disabled="true"></a>
                    </li>
                </ul>
                <form class="d-flex">

            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Home</h1>
                <span>e</span>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4">
                <table class="w-100">
                    <tr>
                        <td class="w-75">1</td>
                        <td class="w-25">$ 1,90</td>
                    </tr>
                </table>
            </div>
            <div class="col-12 col-lg-4">
                <table class="w-100">
                    <tr>
                        <td class="w-75">2</td>
                        <td class="w-25">$ 1,90</td>
                    </tr>
                </table>
            </div>
            <div class="col-12 col-lg-4">
                <table class="w-100">
                    <tr>
                        <td class="w-75">3</td>
                        <td class="w-25">$ 1,90</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>


    <script src="/assets/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>


</html>