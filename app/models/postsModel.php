<?php

namespace App\Models\PostsModel;

use \PDO;

function findAll(PDO $connexion)
{
    $sql = "SELECT *
            FROM posts 
            ORDER BY created_at DESC 
            LIMIT 10";

    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findRecents(PDO $connexion)
{
    $sql = "SELECT 	p.image AS postImage, p.id AS postId, 
                    COUNT(c.id) AS nbreComments,
                    p.title, p.created_at, a.lastname, a.firstname
            FROM posts p
            JOIN authors a ON p.author_id = a.id
            LEFT JOIN comments c ON c.post_id = p.id
            GROUP BY p.id
            ORDER BY p.created_at DESC 
            LIMIT 3;";

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
