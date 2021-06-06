<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pl-PL">
<head xmlns="http://www.w3.org/1999/xhtml">
<meta charset="UTF-8">
    <title>Produkcja mebli na wymiar &laquo Ewmar</title>
    <link rel="shortcut icon" href="../img/favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zajmujemy się projektowaniem, produkcją i montażem mebli na wymiar. Nasza oferta obejmuje produkcję i montaż mebli kuchennych, szaf z drzwiami suwanymi, otwieranymi i łamanymi, garderób, mebli łazienkowych, mebli biurowych, mebli nietypowych." /><meta name="keywords" content="Meble na wymiar, Warszawa, EWMAR, sklep meblowy"/>
    <link rel="stylesheet" href="../css-folder/style-for-all.css" type="text/css">
    <link rel="stylesheet" href="../css-folder/contact-style.css" type="text/css">
</head>
<div style="display: none;">
    <?php
        $name = $email = $topic = $text = "";
        $nameErr = $emailErr = "";
        $result = 0;

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(!empty($_POST["imie"]))
            {
                if(preg_match("/^[a-zA-Z-' ]*$/",$_POST["imie"]))
                {
                    $name = $_POST["imie"];
                }
                else
                {
                   $nameErr = "Pole imię i nazwisko może zawierać tylko litery i spacje!";
                }
            }
            else
            {
                $nameErr = "Pole nie może być puste!";
            }

            if(!empty($_POST["email"]))
            {
                if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
                {
                    $email = $_POST["email"];
                }
                else
                {
                    $emailErr = "Wpisano zły email!";
                }
            }
            else
            {
                $emailErr = "Pole nie może być puste!";
            }

            $topic = $_POST["temat"];
            $text = $_POST["wiadomosc"];

            if(empty($emailErr) && empty($nameErr))
            {
                if(mail("info@ewmar-meble.pl", $topic, $text))
                {
                    $result = 1;
                }
                else
                {
                    $result = 2;
                }
            }
        }
    ?>  
</div>
<body>
    <button onclick="topFunction()" id="topBtn">&uarr;</button>
    <header>
        <div class="menu">
            <div class="buttons">
                <ul>
                    <li><a class="main-button" href="../">Strona główna</a></li>
                    <li>
                        <div class="dropdown">
                            <a class="main-button dropbtn">Galeria</a>
                            <div class="dropdown-content">
                                <a href="../meble-kuchenne/">Meble kuchenne</a>
                                <a href="../szafy/">Szafy</a>
                                <a href="../inne/">Inne</a>
                            </div>
                        </div>
                    </li>
                    <li><a class="main-button" href=".">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <section id="text_sladera" style="background-image: url('../img/tloKuchnia2.jpg')">
            <div class="text">
                <a href="../"><img src="../img/duzeLogo.png" width="100%"></a>
            </div>
        </section>

        <section id="contact-info">
            <div id="contact-info-text">
                <h1>Kontakt</h1>
                <p>Zadzwoń do nas lub wyślij zapytanie dotyczące interesujących Cię mebli na adres e-mail. Podaj przybliżone wymiary i opis (może to być zdjęcie, odręczny rysunek wraz z rozmieszczeniem szafek, projekt architektoniczny, ewentualnie materiały, z których mają być wykonane meble), my podamy wstępną wycenę i stworzymy projekt zgodnie z Państwa sugestiami, z uwzględnieniem zasad estetyki, wygody i ergonomii.
                    <br>Działamy na terenie Warszawy i okolic.
                </p>
                <div id="contact-info-numbers">
                    <div style="width: 100%; height: 100%;"></div>
                    <p>Kontakt telefoniczny:</p>
                    <?php
                        $plik = fopen("../numery.txt", "r");

                        while(!feof($plik))
                        {
                            $linia = fgets($plik);
                            echo "<p><b>$linia</b></p>";
                        }

                        fclose($plik);
                    ?>
                    <p>E-mail:</p>

                    <?php
                        $plik = fopen("../email.txt", "r");

                        while(!feof($plik))
                        {
                            $linia = fgets($plik);
                            echo "<p><b><a href='mailto:$linia'>$linia</a></b></p>";
                        }

                        fclose($plik);
                    ?>
                </div>
            </div>

            <div id="form-background">
                <h1>Formularz kontaktowy</h1>
                
                <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <p>
                        Imię i nazwisko (pole wymagane)<br>
                        <input type="text" name="imie" size="38" required autocomplete="off" <?php echo 'value="'.$name.'"'; ?>> <?php if(!empty($nameErr)) { echo "<br><span class='error'>$nameErr</span>"; $nameErr="";}?>
                    </p>

                    <p>
                        Adres email (pole wymagane)<br>
                        <input type="email" name="email" size="38" required <?php echo 'value="'.$email.'"'; ?>> <?php if(!empty($emailErr)) { echo "<br><span class='error'>$emailErr</span>"; $emailErr="";}?>
                    </p>

                    <p>
                        Temat<br>
                        <input type="text" name="temat" size="38" autocomplete="off" <?php echo 'value="'.$topic.'"'; ?>>
                    </p>

                    <p>
                        Treść wiadomości<br>
                        <textarea name="wiadomosc" cols="40" rows="14" maxlength="999" style="resize: none;"><?php echo $text; ?></textarea>
                    </p>

                    <p>
                        <input type="submit" value="Wyślij" id="submit-button"> <?php if($result == 1) echo "<span class='result good-result'>Udało się wysłać wiadomość.</span>";
                        else if($result == 2) echo "<span class='result bad-result'>Nie udało się wysłać wiadomości.</span>"; ?>
                    </p>
                </form>
            </div>
        </section>    

        <script>
            if (window.history.replaceState)
            {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
        <script src="../topButton.js"></script>
    </main>

    <?php include "../footer.php"; ?>
</body>
</html>
