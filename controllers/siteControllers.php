<?php

include("models/bdPortfolio.php");

function ajoutAccueil() {
    include("views/accueil.php");
}

function ajoutListeClientCompo() {
    include("views/listeclientcomposition.php");
}

function ajoutSeConnecter() {
    include("views/seConnecter.php");
}

function ajoutAccueilAdmin() {
    include("views/accueiladmin.php");
}

function ajoutNouvelUtilisateur() {
    include("views/nouvelUtilisateur.php");
}

function ajoutNouvelleCompo() {
    include("views/nouvelleCompo.php");
}

function ajoutListeCompoModif() {
    include("views/listeCompoModif.php");
}

function ajoutListeUtilisateursModifs() {
    $utilisateurNom = listeUtilisateurs();
    include("views/listeUtilisateursModifs.php");
}
function ajoutModifierUtilisateur() {
    // modifierUtilisateur($_GET["id"]);
    // header("location:listeUtilisateursModifs.php");
    $nom = getUtilisateur($_GET["id"]);
    include("views/modifierUtilisateur.php");
}

function modifierSubmitController() {
    // mettre a jour 
    modifierUtilisateur($_POST["id"], $_POST["nom"], $_POST["courriel"], $_POST["motdepasse"]);
    // redirection vers liste 
    header("location:listeUtilisateursModifs.php");
    exit();
}

function ajoutSupprimerUtilisateur() {
    supprimerUtilisateur($_GET["id"]);
    header("location:listeUtilisateursModifs.php");
    exit();
}

function ajoutUtilisateurController() {
    $utilisateurs = array(
        "nom" => $_POST["nom"],
        "courriel" => $_POST["courriel"],
        "motdepasse" => $_POST["motdepasse"],
    );
// Appel de la fonction du model pour sauvegarder dans la bd
ajoutUtilisateurs($utilisateurs);
    // Retourne la page html de succes
    include("views/ajoutSucces.php");
}

function ajoutListeCompositionsModifs() {
    $compositionNoms = listeCompositions();
    include("views/listeCompoModif.php");
}

function ajoutCompositionController() {
    $compositions = array(
        "titrecomposition" => $_POST["titrecomposition"],
        "titreprojet" => $_POST["titreprojet"],
        "description" => $_POST["description"],
        "urlaudio" => $_POST["urlaudio"],
        "urlimage" => $_POST["urlimage"],
    );
    // Appel de la fonction du model pour sauvegarder dans la bd
    ajoutComposition($compositions);
    // Retourne la page html de succes
    include("views/ajoutSuccesCompo.php");
}


function ajoutSupprimerComposition() {
    supprimerComposition($_GET["id"]);
    header("location:listeCompoModif.php");
    exit();
}
