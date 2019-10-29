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
        (description, titreprojet, titrecomposition, urlaudio, urlimage)
    VALUES
    ('". $compositions["description"] ."','". $compositions["titreprojet"] ."','". $compositions["titrecomposition"] ."','". $compositions["urlaudio"] ."','". $compositions["urlimage"] ."')
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

function supprimerComposition($id) {
    global$bdd;
    $sql = "
        DELETE FROM listeoeuvres
        WHERE id = $id 
    ";
    $resultats = mysqli_query($bdd, $sql);
    return $resultats;
}
