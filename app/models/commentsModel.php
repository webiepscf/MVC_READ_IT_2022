<?php

namespace App\Models\CommentsModel;

use \PDO;


function findAllByPostId(PDO $connexion, int $postID)
{
    // Tous les comments du post n°$postID par date décroissante
    $sql = "SELECT *
            FROM comments
            WHERE post_id = :postID
            ORDER BY created_at DESC;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':postID', $postID, PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
