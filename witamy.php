<?php
    session_start();
    
    if((!isset($_SESSION['udanarejestracja'])) ){
        header('Location:index.php');
        exit();
    }
    else{
        unset($_SESSION['udanarejestracja']);
    }
//usuwamy zmienne zapamietanych wartosci wpisanych do formularza
    if(isset($_SESSION['fr_nick'])) unset ($_SESSION['fr_nick']);
    if(isset($_SESSION['fr_email'])) unset ($_SESSION['fr_email']);
    if(isset($_SESSION['fr_haslo1'])) unset ($_SESSION['fr_haslo1']);
    if(isset($_SESSION['fr_haslo2'])) unset ($_SESSION['fr_haslo2']);
    if(isset($_SESSION['fr_regulamin'])) unset ($_SESSION['fr_regulamin']);
    
    //usuwanie bledow rejestracji
    if(isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
    if(isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
    if(isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
    if(isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
    if(isset($_SESSION['e_bot'])) unset($_SESSION['e_bot']);
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
                        <p>Dziękujemy za rejestrację w serwisie! Możesz już zalogować się na konto.</p>
                        
                    
                </div>
                <hr/>
                <div class="col-md-12">
                    <a href="index.php">Zaloguj się na swoje konto!</a>
                    <br><br>
                </div>
                <div class="col-md-12">

              <!--  <form action="zaloguj.php" method="post">

                    Login: <br> <input type="text" name="login"> <br/>
                    Hasło: <br> <input type="password" name="haslo"> <br/><br/>
                    <input type="submit" value="Zaloguj się">
                </form>
              -->
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
