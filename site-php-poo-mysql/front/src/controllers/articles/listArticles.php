<?php

// import de la connexion Connexion à la DB
include '../../../../env.php';
include '../../../../back/src/database/database.php';
// echo "je suis dans la page articles.php";

/**
 * CE FICHIER A POUR BUT D'AFFICHER LA PAGE D'ACCUEIL à travers le layout!
 * 
 * On va donc se connecter à la base de données, récupérer les articles du plus récent au plus ancien (SELECT * FROM articles ORDER BY created_at DESC)
 * puis on va boucler dessus pour afficher chacun d'entre eux
 */

/**
 *Comment ça marche..............
 **/

/**
 * 1. Connexion à la base de données avec PDO
 * Attention, on précise ici deux options :
 * - Le mode d'erreur : le mode exception permet à PDO de nous prévenir violament quand on fait une connerie ;-)
 * - Le mode d'exploitation : FETCH_ASSOC veut dire qu'on exploitera les données sous la forme de tableaux associatifs
 */
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/**
 * 2. Récupération des articles
 */
// On utilisera ici la méthode query (pas besoin de préparation car aucune variable n'entre en jeu)
$resultats = $pdo->query('SELECT * FROM articles ORDER BY created_at DESC');
// On fouille le résultat pour en extraire les données réelles
$articles = $resultats->fetchAll();
Database::disconnect();
// print_r($articles);

/**
 * 3. Affichage
 */
$pageTitle = "Nos Articles";
session_start();
ob_start();
//on utilise ce require pour afficher le Html
// require('../article.php');
require ('../../pages/articles/listArticles.html.php');
$pageContent = ob_get_clean();
//on utilise ce require pour utiliser le bon layout
require('../../layout/layout.html.php');