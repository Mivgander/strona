<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pl-PL">
<head xmlns="http://www.w3.org/1999/xhtml">
    <meta charset="UTF-8">
    <title>Produkcja mebli na wymiar &laquo Ewmar</title>
    <link rel="shortcut icon" href="img/favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zajmujemy się projektowaniem, produkcją i montażem mebli na wymiar. Nasza oferta obejmuje produkcję i montaż mebli kuchennych, szaf z drzwiami suwanymi, otwieranymi i łamanymi, garderób, mebli łazienkowych, mebli biurowych, mebli nietypowych." /><meta name="keywords" content="Meble na wymiar, Warszawa, EWMAR, sklep meblowy"/>
    <script src="slider.js"></script>
    <link rel="stylesheet" href="./css-folder/style-for-all.css" type="text/css">
    <link rel="stylesheet" href="./css-folder/main-menu.css" type="text/css">
</head>
<body>
    <button onclick="topFunction()" id="topBtn">&uarr;</button>
    <header>
        <div class="menu">
            <div class="buttons">
                <ul>
                    <li><a class="main-button" href=".">Strona główna</a></li>
                    <li>
                        <div class="dropdown">
                            <a class="main-button dropbtn">Galeria</a>
                            <div class="dropdown-content">
                                <a href="./meble-kuchenne/">Meble kuchenne</a>
                                <a href="./szafy/">Szafy</a>
                                <a href="./inne/">Inne</a>
                            </div>
                        </div>
                    </li>
                    <li><a class="main-button" href="./kontakt/">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <section id="text_sladera">
            <div class="text">
                <a href="."><img src="img/duzeLogo.png" width="100%"></a>
            </div> 
        </section>
        
        <section id="slider-and-info">
            <div id="info">
                <div style="width: 100%; height: 100%;"></div>
                <h1>O nas</h1>
                <p>Firma EWMAR zajmuje się projektowaniem, produkcją i montażem mebli na wymiar. Nasza oferta obejmuje produkcję i montaż mebli kuchennych, szaf z drzwiami suwanymi, otwieranymi i łamanymi, garderób, mebli łazienkowych, mebli biurowych, mebli nietypowych.<br>
                    Zadzwoń do nas lub wyślij zapytanie dotyczące interesujących Cię mebli na adres e-mail. Podaj przybliżone wymiary i opis (może to być zdjęcie, odręczny rysunek wraz z rozmieszczeniem szafek, projekt architektoniczny, ewentualnie materiały, z których mają być wykonane meble), my podamy wstępną wycenę i stworzymy projekt zgodnie z Państwa sugestiami, z uwzględnieniem zasad estetyki, wygody i ergonomii.<br>
                    Działamy na terenie Warszawy i okolic.</p>
            </div>
            <div id="sider">
                <div style="height: 100%; width: 100%;">
                </div>
                <div class="fade_obr fade">
                    <img src="img/1.jpg" alt="mebel" style="width: 100%;">
                </div>
                <div class="fade_obr fade">
                    <img src="img/2.jpg" alt="mebel" style="width: 100%;">
                </div>
                <div class="fade_obr fade"> 
                    <img src="img/3.jpg" alt="mebel" style="width: 100%;">
                </div>
                <div class="fade_obr fade">
                    <img src="img/4.jpg" alt="mebel" style="width: 100%;"> 
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </section>
        <script>showSlides(0, false)</script>

        <section id="gallery">
            <div id="background-gallery">
                <span>Zdjęcia z realizacji</span>
                <div id="pictures">
                    <img src="img/5.jpg" alt="zdjęcie">
                    <img src="img/6.jpg" alt="zdjęcie">
                    <img src="img/7.jpg" alt="zdjęcie">
                    <div id="more-button">
                        <a href="./meble-kuchenne/">Zobacz więcej</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <h3 style="text-decoration: underline;">Skontaktuj się z nami!</h3>
            <p>Kontakt telefoniczny:</p>
            <?php
                $plik = fopen("numery.txt", "r");

                while(!feof($plik))
                {
                    $linia = fgets($plik);
                    echo "<p><b>$linia</b></p>";
                }

                fclose($plik);
            ?>
            <p>E-mail:</p>

            <?php
                $plik = fopen("email.txt", "r");

                while(!feof($plik))
                {
                    $linia = fgets($plik);
                    echo "<p><b><a href='mailto:$linia'>$linia</a></b></p>";
                }

                fclose($plik);
            ?>
        </section>
    </main>

    <script src="topButton.js"></script>

    <?php include "footer.php"; ?>
</body>
</html>
