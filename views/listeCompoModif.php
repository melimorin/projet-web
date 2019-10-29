<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">

    <!-- Barre de naviguation -->
        <?php 
            $page = "listeCompoModif";
            include("views/include/navbar.php");
        ?>
        
    </div>
    <div class="container container-admin-color espace-titre">
      <form class="padding-boite-admin">
      <?php 
          include("views/include/navbarAdmin.php");
      ?>
        <h2 class="sous-titre espace-titre ">Liste des compositions</h2>
        <?php foreach ($compositionNoms as $compositionNom){ ?>
        <div class="btn-compo-modif">
            <div class="left-bar"><p><?php echo $compositionNom["titrecomposition"];?></p></div>
            <div class="right-bar">
                <a href="modifierUtilisateur.php?id=<?php echo $compositionNom["id"];?>" class="text-gras sous-ligne">Modifier</a>
                <a href="supprimerComposition.php?id=<?php echo $compositionNom["id"];?>" class="text-gras sous-ligne">Supprimer</a>
            </div>
        </div>
        <?php } ?>

        <!-- <div class="btn-compo-modif">
            <div class="left-bar"><p>Madam Razalt</p></div>
            <div class="right-bar">
                <a class="text-nav-admin sous-ligne" href="#apropos">Modifier</a>
                <a href="#">Delete</a>
            </div>
        </div>
        <div class="btn-compo-modif">
            <div class="left-bar"><p>Aime moi comme tu french</p></div>
            <div class="right-bar">
                <a class="text-nav-admin sous-ligne" href="#apropos">Modifier</a>
                <a href="#">Delete</a>
            </div>
        </div>
        <div class="btn-compo-modif">
            <div class="left-bar"><p>La vie d’Alex Joset</p></div>
            <div class="right-bar">
                <a class="text-nav-admin sous-ligne" href="#apropos">Modifier</a>
                <a href="#">Delete</a>
            </div>
        </div>
        <div class="btn-compo-modif">
            <div class="left-bar"><p>Sic Sic Sic</p></div>
            <div class="right-bar">
                <a class="text-nav-admin sous-ligne" href="#apropos">Modifier</a>
                <a href="#">Delete</a>
            </div>
        </div> -->
    </div>
    <!-- Footer -->
    <?php 
        include("views/include/footer.php");
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
