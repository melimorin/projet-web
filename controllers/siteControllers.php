<?php

session_start();
include("models/bdPortfolio.php");

function ajoutAccueil() {
    $compositionNoms = listeCompositionsAcuueil();
    include("views/accueil.php");
}

function ajoutListeClientCompo() {
    $compositionNoms = listeCompositions();
    include("views/listeclientcomposition.php");
}

function ajoutSeConnecter() {
    include("views/seConnecter.php");
}

function ajoutAccueilAdmin() {
    include("utils/secure.php");
    include("views/accueiladmin.php");
}

function ajoutNouvelUtilisateur() {
    include("utils/secure.php");
    include("views/nouvelUtilisateur.php");
}

function ajoutNouvelleCompo() {
    include("utils/secure.php");
    include("views/nouvelleCompo.php");
}

function ajoutListeCompoModif() {
    include("utils/secure.php");
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
        "motdepasse" => md5($_POST["motdepasse"]),
    );
// Appel de la fonction du model pour sauvegarder dans la bd
ajoutUtilisateurs($utilisateurs);
    // Retourne la page html de succes
    include("views/ajoutSucces.php");
}
function ajoutCourrielController() {
    $utilisateurs = array(
        "courriel" => $_POST["courriel"]
    );
// Appel de la fonction du model pour sauvegarder dans la bd
ajoutCourrielNewsletter();
    // Appel de la fonction du model pour sauvegarder dans la bd
    ajoutCourriel($newsletter);

    // Retourne la page html de succes
    include("views/ajoutSucces.php");
}

function ajoutListeCompositionsModifs() {
    $compositionNoms = listeCompositions();
    include("views/listeCompoModif.php");
}

function ajoutCompositionController() {
    $imageTemporaire = $_FILES["urlimage"]["tmp_name"];
    $nomImage = basename($_FILES["urlimage"]["name"]);
    $destinationImage = "uploads/" . $nomImage;
    move_uploaded_file($imageTemporaire, $destinationImage);
    
    $audioTemporaire = $_FILES["urlaudio"]["tmp_name"];
    $nomAudio = basename($_FILES["urlaudio"]["name"]);
    $destinationAudio = "uploads/" . $nomAudio;
    move_uploaded_file($audioTemporaire, $destinationAudio);

    
    $compositions = array(
        "titrecomposition" => $_POST["titrecomposition"],
        "titreprojet" => $_POST["titreprojet"],
        "description" => $_POST["description"],
        "urlaudio" => $destinationAudio,
        "urlimage" => $destinationImage,
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

function ajoutModifierComposition() {
    // modifierUtilisateur($_GET["id"]);
    // header("location:listeUtilisateursModifs.php");
    $composition = getComposition($_GET["id"]);
    include("views/modifierComposition.php");
}

function modifierCompoSubmitController() {
    // mettre a jour 
    modifierComposition($_POST["id"], $_POST["titrecomposition"], $_POST["titreprojet"], $_POST["description"], $_POST["urlaudio"], $_POST["urlimage"]);
    // redirection vers liste 
    header("location:listeCompoModif.php");
    exit();
}

function loginSubmit() {
    loginModels();
}
