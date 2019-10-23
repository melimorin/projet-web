<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">

<!-- Barre de naviguation -->
        <?php 
            include("views/include/navbar.php");
        ?>
    
    </div>

<!-- Hero -->
    <div class="hero">
        <div class="container-hero">
            <div class="text-hero">
                <h2 class="titre">Compositeur, mélodiste et <br> arrangeur de musique inspiré.</h2>
                <p class="text">GABRIEL FORION partage sa vie <br> entre la chanson et la musique de film depuis plusieurs années.</p>
            </div>
            <div class="photo-hero">
                <img src="images/pianiste.png" alt="">
            </div>
        </div>

    </div>
<!-- Derniere composition - section -->
    <div class="container derniere-compo">
        <div class="container container-compo">
            <div class="text-derniere-compo">
                <h2 class="titre espace-titre ">Derniere composition</h2>
                <p class="text espace-titre">Nous vous proposons de decouvrir les nouvelles trames sonores.</p>
            </div>
            <div class="img-derniere-compo espace-titre">
                <img class="image overlay" src="images/SicSicSic.png" alt="">
                <img class="image overlay" src="images/AlexJoset.png" alt="">
                <img class="image overlay" src="images/MadamRazzal.png" alt="">
            </div>
        </div>

    </div>
<!-- a propos - section -->
        <div class="container-propos">
            <div class="container">
                <h2 class="titre-light espace-titre">A propos</h2>
                <div class="propos-texte text-light">
                    <p class="espace-texte">Stagiaire à Sienne (Italie) auprès du grand ENNIO MORRICONE, il a remporté 6 Félix et Jutra et a été nominé plus de 21 fois aux galas Adisq, Jutra et Genie Awards depuis l'année 2000. ARRANGEUR DE L'ANNÉE en 2010 dve même qu'en 2011 pour ses albums « Sun Heat » et « Les Quarks ».</p>
                    <p class="espace-texte">Gabriel Forion signe notamment la musique de « Madam Razzal » (mettant en vedette ABDUL GALEF), film de RÉJEAN GRANEAU nominé pour un Oscar dans la catégorie Best Foreign Language Film, pour lequel il remporte au Québec le Jutra Meilleure musique originale en 2012.</p>
                    <p class="espace-texte">Parmi ces œuvres on retrouve la trame musicale du film « Ghost of him » de STEFAN PSIELBREG, du documentaire « La vie d’Alex Joset » de GABRIEL GUERRERO et du court métrage « Sic Sic Sic » de DANIEL LAITUE.</p>
                    <p class="espace-texte">Toujours un crayon à la main, en 2015-2016 GABRIEL FORION compose la musique des films « Aime-moi comme tu french », d’ANDRÉE FORCÉE; « Les êtres dispendieux », d'ALAIN EDMOND (sa chanson Blue & Green est nominée Meilleure Chanson Originale aux Canadian Screen Awards 2016) et « Gaylord s'en va en guerre » de RENÉ DRAPEAU, pour lequel il remporte à nouveau au Québec le Jutra Meilleure Musique Originale 2016.</p>
                </div>
            </div>
        </div>

<!-- Footer -->
        <?php 
            include("views/include/footer.php");
        ?>
</body>
