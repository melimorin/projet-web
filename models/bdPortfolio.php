<?php
include("utils/bdd.php");

function listeUtilisateurs() {
    global $bdd;

    $sql = "
        SELECT id, nom, courriel, motdepasse
        FROM listeutilisateurs
    ";
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;
}

function modifierUtilisateur($id, $utilisateurNom, $utilisateurCourriel, $utilisateurmdp) {
    global$bdd;
    $sql = "
        UPDATE listeutilisateurs
        SET nom = '$utilisateurNom', courriel = '$utilisateurCourriel', motdepasse = '$utilisateurmdp'
        WHERE id = $id 
    ";
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;
}
function supprimerUtilisateur($id) {
    global$bdd;
    $sql = "
        DELETE FROM listeutilisateurs
        WHERE id = $id 
    ";
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;
}

function getUtilisateur($id) {
    global$bdd;
    $sql = "
        SELECT id, nom, courriel, motdepasse
        FROM listeutilisateurs
        WHERE id = $id 
    ";
    $resultats = mysqli_query($bdd, $sql);
    return mysqli_fetch_assoc($resultats);
}

function ajoutUtilisateurs($utilisateurs) {
    global $bdd;
    $sql = "
    INSERT INTO listeutilisateurs
        (nom, courriel, motdepasse)
    VALUES
    ('". $utilisateurs["nom"] ."','". $utilisateurs["courriel"] ."','". $utilisateurs["motdepasse"] ."')
    ";

    mysqli_query($bdd,$sql);
}

function ajoutComposition($compositions) {
    global $bdd;
    $sql = "
    INSERT INTO listeoeuvres
        (description, titreprojet, titrecomposition, urlaudio, urlimage, date)
    VALUES
    ('". $compositions["description"] ."','". $compositions["titreprojet"] ."','". $compositions["titrecomposition"] ."','". $compositions["urlaudio"] ."','". $compositions["urlimage"] ."', NOW())
    ";

    mysqli_query($bdd,$sql);
}

function ajoutCourriel($newsletter) {
    global $bdd;
    $sql = "
    INSERT INTO newsletter
        (courriel)
    VALUES
    ('". $newsletter["courriel"] ."')
    ";

    mysqli_query($bdd,$sql);
}

function getCompositions($id) {
    global$bdd;
    $sql = "
        SELECT id, description, titreprojet, titrecomposition, urlaudio, urlimage
        FROM listeoeuvres
        WHERE id = $id 
    ";
    $resultats = mysqli_query($bdd, $sql);
    return mysqli_fetch_assoc($resultats);
}

function listeCompositions() {
    global $bdd;

    $sql = "
        SELECT id, description, titreprojet, titrecomposition, urlaudio, urlimage
        FROM listeoeuvres
    ";
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;
}

function listeCompositionsAcuueil() {
    global $bdd;

    $sql = "
        SELECT id, description, titreprojet, titrecomposition, urlaudio, urlimage
        FROM listeoeuvres
        ORDER BY date DESC
        LIMIT 3

    ";
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;
}

function supprimerComposition($id) {
    global$bdd;
    $sql = "
        DELETE FROM listeoeuvres
        WHERE id = $id 
    ";
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;
}

function modifierComposition($id, $titreCompo, $titreProjet, $compoDescription, $urlimage, $urlaudio) {
    global$bdd;
    $sql = "
        UPDATE listeoeuvres
        SET titrecomposition = '$titreCompo', titreprojet = '$titreProjet', description = '$compoDescription', urlimage = '$urlimage', urlaudio = '$urlaudio'
        WHERE id = $id 
    ";
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;
}

function loginModels() {
    global $bdd;
    if (isset($_POST["email"]) == false) {
        header("location:seconnecter.php");
        exit();
    }
    
    $username = $_POST["email"];
    $password = md5($_POST["password"]);
    
    $sql = "
    SELECT *
    FROM listeutilisateurs
    WHERE
        courriel = '" . $username . "' AND
        motdepasse = '" . $password . "';
    ";
    
    $resultats = mysqli_query($bdd, $sql);
    

    if (!$resultats) {
        echo mysqli_error($bdd);
        exit();
    }
    
    
    if (mysqli_num_rows($resultats) > 0) {
    
        $utilisateur = mysqli_fetch_assoc($resultats);
        $_SESSION["estConnecte"] = true;
        $_SESSION["nom"] = $utilisateur["nom"];

        header("location:accueiladmin.php");
        exit();
    
    } else {
        $_SESSION["estConnecte"] = false;
        header("location:seconnecter.php");
        exit();
    
    }
    
    echo $sql;
}
