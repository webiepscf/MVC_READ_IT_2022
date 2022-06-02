<?php

namespace App\Models\PostsModel;

use \PDO;

function findAll(PDO $connexion)
{
    $sql = "SELECT *
            FROM posts 
            ORDER BY created_at DESC 
            LIMIT 10;";

    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, int $id)
{
    $sql = "SELECT *
            FROM posts
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}
