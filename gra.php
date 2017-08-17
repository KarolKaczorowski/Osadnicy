<?php
session_start();

if (!isset($_SESSION['zalogowany'])) {
    header('Location:index.php');
    exit();
}
?>
<!DOCTYPE HTML>
<html lang="pl">

    <head>
        <meta charset="utf-8"/>
        <title>Osadnicy - gra przeglądarkowa</title> 
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hr/>
                    <?php
                    echo "<p>Witaj " . $_SESSION['user'] . '! [<a href="logout.php">Wyloguj się!</a>]</p>';
                    echo "<p><b>Drewno</b>:" . $_SESSION['drewno'];
                    echo " | <b>Kamień</b>:" . $_SESSION['kamien'];
                    echo " | <b>Zboże</b>:" . $_SESSION['zboze'] . "</p>";


                    echo "<p><b>E-mail</b>:" . $_SESSION['email'];
                    echo "<br/><b>Data wygaśnięcia premium</b>:" . $_SESSION['dnipremium'] . "</p>";

                    $dataczas = new DateTime(); //'2017-01-06 21:30:15'
                    echo "Data i czas serwera: " . $dataczas->format('Y-m-d H:i:s') . "<br>";
                    $koniecprem = DateTime::createFromFormat('Y-m-d H:i:s', $_SESSION['dnipremium']);
                    $roznica = $dataczas->diff($koniecprem);
                    if ($dataczas < $koniecprem) {
                        echo "Pozostało premium: " . $roznica->format('%y lat, %m mies, %d dni, %h godz, %i min, %s sek');
                    } else {
                        echo "Premium nieaktywne od: " . $roznica->format('%y lat, %m mies, %d dni, %h godz, %i min, %s sek');
                    }
                    ?>
                </div>
            </div>
        </div>


        <script src="js/libs/jquery/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>

    </body>



</html>
