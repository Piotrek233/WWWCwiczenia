<?php
require("polaczenieZBaza.php");
$pytanie = "SELECT * FROM miejsca";
$miejsca = $pdo->query($pytanie)->fetchAll();
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
            <h2 style="text-align: center">Ciekawe miejsca Podlasia</h2>
            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ciekawe miejsce</th>
                    <th scope="col">Miasto</th>
                    <th scope="col">Informacja o miejscu</th>
                </tr>
                <?php
                foreach($miejsca as $miejsca):
                ?>
                <tr>
                    <th scope="row"><?php echo $miejsca["id"]?></th>
                    <td><?php echo $miejsca["ciekawe_miejsce"]?></td>
                    <td><?php echo $miejsca["miasto"]?></td>
                    <td><?php echo $miejsca["informacje"]?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            </table>

            <h2 style="text-align: center"> 10 najwiekszych miast na Podlasiu pod względem liczby mieszkańców</h2>
            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Miasto</th>
                    <th scope="col">Powiat</th>
                    <th scope="col">Liczba ludności</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Białystok</td>
                    <td>Białystok</td>
                    <td>297,356</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Suwałki</td>
                    <td>Suwałki</td>
                    <td>69,858</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Łomża</td>
                    <td>Łomża</td>
                    <td>62,965</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Augustów</td>
                    <td>Augustowskik</td>
                    <td>30,190</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Bielsko Podlaski</td>
                    <td>Bielski</td>
                    <td>25,290</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Zambrów</td>
                    <td>Zambrowski</td>
                    <td>22,098</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Łomża</td>
                    <td>62,965</td>
                    <td>32,67</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Łomża</td>
                    <td>62,965</td>
                    <td>32,67</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Łomża</td>
                    <td>62,965</td>
                    <td>32,67</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <th>Grajewo</th>
                    <td>Grajewski</td>
                    <td>21,909</td>
                </tr>
                </tbody>
            </table>
            </table>
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