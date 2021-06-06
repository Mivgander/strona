<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pl-PL">
<head xmlns="http://www.w3.org/1999/xhtml">
    <meta charset="UTF-8">
    <title>Meble kuchenne &laquo EWMAR</title>
    <link rel="shortcut icon" href="../img/favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zajmujemy się projektowaniem, produkcją i montażem mebli na wymiar. Nasza oferta obejmuje produkcję i montaż mebli kuchennych, szaf z drzwiami suwanymi, otwieranymi i łamanymi, garderób, mebli łazienkowych, mebli biurowych, mebli nietypowych." /><meta name="keywords" content="Meble na wymiar, Warszawa, EWMAR, sklep meblowy"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link rel="stylesheet" href="../css-folder/style-for-all.css" type="text/css">
    <link rel="stylesheet" href="../css-folder/gallery-style.css" type="text/css">
</head>
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
                                <a href=".">Meble kuchenne</a>
                                <a href="../szafy/">Szafy</a>
                                <a href="../inne/">Inne</a>
                            </div>
                        </div>
                    </li>
                    <li><a class="main-button" href="../kontakt/">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </header>
    
    <section id="text_sladera" style="background-image: url('../img/tloKuchnia2.jpg')">
            <div class="text">
                <a href="../"><img src="../img/duzeLogo.png" width="100%"></a>
            </div> 
    </section>
    
    <main class="container">
        

        <div class="tz-gallery">
            <div class="row">
                <h1>Meble kuchenne</h1>
            </div>
            <div class="row">
                <?php
                    $images = glob("kuchnia/*.jpg");

                    foreach($images as $image)
                    {
echo<<<END
                        <div class="elo col-md-4">
                            <div class="ramka">
                                <a class="lightbox" href="$image">
                                    <img src="$image">
                                </a>
                            </div>
                        </div>
END;
                    }
                ?>
            </div>
        </div>
    </main>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>

<section id="contact">
    <h3 style="text-decoration: underline;">Skontaktuj się z nami!</h3>
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
</section>

    <script src="../topButton.js"></script>

    <?php include "../footer.php"; ?>
</body>
</html>
