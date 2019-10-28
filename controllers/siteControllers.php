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

