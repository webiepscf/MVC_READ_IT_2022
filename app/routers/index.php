<?php


if (isset($_GET['postID'])) :
    // ROUTE DU DETAIL D'UN POST
    // PATTERN: ?postID=x
    // CTRL: postsController
    // ACTION: showAction
    require_once '../app/controllers/postsController.php';
    showAction($connexion, $_GET['postID']);


else :
    // ROUTE PAR DEFAUT
    // PATTERN: /
    // CTRL: postsController
    // ACTION: index
    require_once '../app/controllers/postsController.php';
    indexAction($connexion);
endif;
