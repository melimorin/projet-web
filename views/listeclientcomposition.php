<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Composition</title>
    <script type="module">
		import App from "./src/App.js";
		App.load().then(() => App.main());
	</script>
</head>
<body>
    <div class="container">

<!-- Barre de naviguation -->
        <?php 
            $page = "composition";
            include("views/include/navbar.php");
        ?>
    
    </div>

    <!-- Composition - section client-->
        <div class="container container-compo">
            <div class="text-derniere-compo">
                <h2 class="titre espace-titre ">Compositions</h2>
                <hr>
            </div> 
        </div>
        <div class="contenant-carroussel">
            <img class="fleche fleche-gauche" src="images/back.svg" alt="">
            <img class="fleche fleche-droite" src="images/next.svg" alt="">
            <div class="img-compo espace-titre">
            <?php foreach ($compositionNoms as $compositionNom){ ?>
                <div class="compo-individuel">
                
                    <img src="images/<?php echo $compositionNom["urlimage"]; ?>" alt="">
                    <div class="black-overlay">
                        <h2 class="espace-titre"><?php echo $compositionNom["titrecomposition"];?></h2>
                        <h3 class="espace-texte"><?php echo $compositionNom["titreprojet"];?></h3>
                        <p class="text-oeuvre"><?php echo $compositionNom["description"];?></p>
                    </div>
                    <audio controls>
                        <source src="<?php echo $compositionNom["urlaudio"];?>" type="audio/mpeg">
                    </audio>
                </div>

                <?php }; ?>

                <!-- <div class="compo-individuel">
                    <img src="images/AlexJoset.png" alt="">
                    <div class="black-overlay">
                        <h2 class="espace-titre">La vie d'Alex Joset</h2>
                        <h3 class="espace-texte">Bande sonore</h3>
                        <p class="text-oeuvre"> Gabriel Forion réalise une bande originale de film ici pour un documentaire. On y retrouve plusieurs compositions épiques qui mettent de l’avant le côté extraordinaire du documentaire. Bien sûr, on notera les ambiances aussi planantes et quelques peu dépressive lors des scènes catastrophes.</p>
                    </div>
                    <audio controls>
                        <source src="audio/documentaire-AlexJoset.mp3" type="audio/mpeg">
                    </audio>
                </div>
                <div class="compo-individuel">
                    <img src="images/MadamRazzal.png" alt="">
                    <div class="black-overlay">
                        <h2 class="espace-titre">Madam Razzal</h2>
                        <h3 class="espace-texte">Bande sonore</h3>
                        <p class="text-oeuvre">Gabriel Forion signe notamment la musique de « Madam Razzal » (mettant en vedette ABDUL GALEF), film de RÉJEAN GRANEAU nominé pour un Oscar dans la catégorie Best Foreign Language Film, pour lequel il remporte au Québec le Jutra Meilleure musique originale en 2012. On qualifie l’œuvre d’essentielle et capitale au succès du film.</p>
                    </div>
                    <audio controls>
                        <source src="audio/MadamRazzal.mp3" type="audio/mpeg">
                    </audio>
                </div>
                <div class="compo-individuel">
                    <img src="images/aimeFrench.png" alt="">
                    <div class="black-overlay">
                        <h2 class="espace-titre">Aime moi comme tu french</h2>
                        <h3 class="espace-texte">Bande sonore</h3>
                        <p class="text-oeuvre">Gabriel Forion compose la musique du film « Aime-moi comme tu french » d’Andrée Forcée. Il puise ses inspirations dans les courants musicaux des années 1980 tout en y ajoutant une touche plus moderne. Cette exquise combinaison bien dosée, ajoute au coté tant humoristique que dramatique du film, tout en y ajoutant nostalgie.</p>
                    </div>
                    <audio controls>
                        <source src="audio/AimeMoiFrench.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div> -->
        </div>


<!-- Footer -->
        <?php 
            include("views/include/footer.php");
        ?>
</body>
