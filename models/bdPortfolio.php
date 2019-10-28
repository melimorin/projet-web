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

function modifierUtilisateur($id, $utilisateurNom) {
    global$bdd;
    $sql = "
        UPDATE nom
        SET titre = '$nom'
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
