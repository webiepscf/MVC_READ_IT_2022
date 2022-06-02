<?php

namespace App\Models\TagsModel;

use \PDO;


function findAllByPostId(PDO $connexion, int $postID)
{
    // Tous les tags du post n°$postID par ordre alphabétique
    $sql = "SELECT *
            FROM tags t
            JOIN posts_has_tags pht ON t.id = pht.tag_id
            WHERE pht.post_id = :postID
            ORDER BY t.name ASC;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':postID', $postID, PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
