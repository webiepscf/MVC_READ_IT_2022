<?php

// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: postsController
// ACTION: index

require_once '../app/controllers/postsController.php';
indexAction($connexion);
