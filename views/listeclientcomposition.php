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

    <!-- Composition - section client-->
        <div class="container container-compo">
            <div class="text-derniere-compo">
                <h2 class="titre espace-titre ">Composition</h2>
                <hr>
            </div> 
        </div>
        <div class="img-compo espace-titre">
            <img class="fleche" src="images/back.svg" alt="">
            <div class="compo-individuel">
                <img src="images/SicSicSic.png" alt="">
                <audio controls>
                    <source src="audio/SicSicSic.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="compo-individuel">
                <img src="images/AlexJoset.png" alt="">
                <audio controls>
                    <source src="audio/documentaire-AlexJoset.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="compo-individuel">
                <img src="images/MadamRazzal.png" alt="">
                <audio controls>
                    <source src="audio/MadamRazzal.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="compo-individuel">
                <img src="images/aimeFrench.png" alt="">
                <audio controls>
                    <source src="audio/AimeMoiFrench.mp3" type="audio/mpeg">
                </audio>
            </div>
            <img class="fleche" src="images/next.svg" alt="">
        </div>


<!-- Footer -->
        <?php 
            include("views/include/footer.php");
        ?>
</body>
