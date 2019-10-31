<?php
if ($_SESSION["estConnecte"] != true) {
    header('location: seConnecter.php');
    exit();
}
