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
    </div>


<!-- Footer -->
        <?php 
            include("views/include/footer.php");
        ?>
</body>
