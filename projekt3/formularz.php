<?php
if (!empty($_POST)) {
    require 'polaczenieZBaza.php';
    $isValid = true;

    $ciekawe_miejsce = $_POST['ciekawe_miejsce'];
    $miasto = $_POST['miasto'];
    $informacje = $_POST['informacje'];

    $ciekawe_miejsceError = null;
    $miastoError = null;
    $informacjeError = null;

    if( empty($ciekawe_miejsce)){
        $isValid = false;
        $ciekawe_miejsceError = "Pole jest wymagane";
    }
    if( empty($miasto)){
        $isValid = false;
        $miastoError = "Pole jest wymagane";    }
    if( empty($informacje)){
        $isValid = false;
        $informacjeError = "Pole jest wymagane";
    }

    if($isValid){

        $sql = "INSERT INTO miejsca (ciekawe_miejsce,miasto,informacje)
            VALUES(?,?,?)";
        $pdo->prepare($sql)->execute([$ciekawe_miejsce, $miasto, $informacje]);
    }
}

?>
<!doctype html>
<html lang="pl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styl.css">
    <title>Projekt2</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <figure style="text-align: center">
                <img src="img/logo.jpg" class="img-fluid">
            </figure>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Strona Główna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="slajder.html">Slajder</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ciekawoski.html">Ciekawoski</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formularz.php">Formularze</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ranking.php">Ranking</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row m-0">
        <div class="col-md-4 col2">
            <figure style="text-align: center">
                <img src="img/1.jpg" class="img-fluid">
            </figure>
        </div>
        <div class="col-md-8 col3">
            <h1 style="text-align: center">Dodaj miasto</h1>
            <div class="row ramka">
                <form action="formularz.php" method="POST">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Wprowadź nazwę miejsca które chcesz odwiedzić?</label>
                        <input type="text" name="ciekawe_miejsce" class="form-control" id="exampleFormControlInput1" placeholder="...">
                        <?php if (!empty($ciekawe_miejsceError)) : ?>
                            <div class='text-danger'> <?php echo $ciekawe_miejsceError; ?> </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Podaj miasto w którym to miejsce się znajduje?</label>
                        <input type="text" name="miasto" class="form-control" id="exampleFormControlInput1" placeholder="...">
                        <?php if (!empty($miastoError)) : ?>
                            <div class='text-danger'> <?php echo $miastoError; ?> </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Dlaczego akurat to miejsce chcesz odwiedzić?</label>
                        <input type="text" name="informacje" class="form-control" id="exampleFormControlInput1" placeholder="...">
                        <?php if (!empty($informacjeError)) : ?>
                            <div class='text-danger'> <?php echo $informacjeError; ?> </div>
                        <?php endif; ?>
                    </div>
                    <div style="text-align: center">
                        <button type="submit" class="btn btn-success">Wyślij</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>