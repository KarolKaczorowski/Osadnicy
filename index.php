<?php
    session_start();
    
    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)){
        header('Location:gra.php');
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
                <blockquote><!-- class="pull-right"-->
                        <p>Tylko martwi ujrzeli koniec wojny - Platon.</p>
                        <small><cite title="Autor">Platon</cite></small>
                    </blockquote>
                </div>
                <hr/>
                <div class="col-md-12">
                    <a href="rejestracja.php">Rejestracja - załóż darmowe konto!</a>
                    <br><br>
                </div>
                <div class="col-md-12">

                <form action="zaloguj.php" method="post">

                    Login: <br> <input type="text" name="login"> <br/>
                    Hasło: <br> <input type="password" name="haslo"> <br/><br/>
                    <input type="submit" value="Zaloguj się">
                </form>
                    <?php
                    if(isset($_SESSION['blad'])){
                    echo $_SESSION['blad'];
                    }
                    ?>
                </div>
            </div>
        </div>




        <script src="js/libs/jquery/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>

    </body>



</html>
