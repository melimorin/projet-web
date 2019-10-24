<!doctype html>
<html lang="en">
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
            include("views/include/navbar.php");
        ?>
        
    </div>
    <div class="container container-admin-color espace-titre">
      <form class="padding-boite-admin">
        <h2 class="titre espace-titre ">Creer une nouvelle composition</h2>
        <div class="form-group onglet">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titre du projet">
        </div>
        <div class="form-group onglet">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titre de la composition">
        </div>
        <div class="input-group mb-3">
        <div class="custom-file ">
            <input type="file" class="custom-file-input" id="inputGroupFile02">
            <label class="custom-file-label" for="inputGroupFile02">Telecharger l'image</label>
        </div>
        <div class="input-group-append">
            <span class="input-group-text" id="">Upload</span>
        </div>
        </div>

        <div class="input-group mb-3">
        <div class="custom-file ">
            <input type="file" class="custom-file-input" id="inputGroupFile02">
            <label class="custom-file-label" for="inputGroupFile02">Telecharger l'audio</label>
        </div>
        <div class="input-group-append">
            <span class="input-group-text" id="">Upload</span>
        </div>
        </div>
    </form>
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
