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
    <div class="derniere-compo">
        <div class="container container-compo">
            <div class="text-derniere-compo">
                <h2 class="titre espace-titre ">Derniere composition</h2>
                <p class="text espace-titre">Nous vous proposons de decouvrir les nouvelles trames sonores.</p>
            </div>
            <div class="img-derniere-compo espace-titre">
                <img src="images/SicSicSic.png" alt="">
                <img src="images/AlexJoset.png" alt="">
                <img src="images/MadamRazzal.png" alt="">
            </div>
        </div>

    </div>
<!-- a propos - section -->
        <div class="container-propos">
            <div class="container">
                <h2 class="titre-light espace-titre">A propos</h2>
            </div>
                <div class="propos-texte text-light">
                    <p>text</p>
                    <p>text</p>
                    <p>text</p>
                    <p>text</p>
                </div>
        </div>

<!-- Footer -->
        <?php 
            include("views/include/footer.php");
        ?>
</body>
