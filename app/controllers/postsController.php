<?php

namespace App\Controllers\PostsController;

use \PDO, \App\Models\PostsModel;

function indexAction(PDO $connexion)
{
    // Je demande les posts au modèle et je les mets dans $posts 
    include_once '../app/models/postsModel.php';
    $posts = PostsModel\findAll($connexion);

    // Je charge la vue index dans $content
    global $content;
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}

function showAction(PDO $connexion, int $id)
{
    // Je demande le post au modèle et je le mets dans $post 
    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($connexion, $id);

    // Je charge la vue show dans $content
    global $content;
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}
