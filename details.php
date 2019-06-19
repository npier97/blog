<?php
    include('pdo.php');

    $query = $bdd->prepare('SELECT * 
    FROM `posts`
    NATURAL JOIN `users` 
    NATURAL JOIN `categories`
    WHERE posts.id_post = ?
    ');
    $query->execute([$_GET['id_post']]);
    $articleData = $query->fetchAll(PDO::FETCH_ASSOC);

    $query2 = $bdd->prepare('SELECT * 
    FROM `comments` AS c
    JOIN `users` AS u ON c.pseudo_comment = u.id_user
    WHERE c.id_post = ?
    ');
    $query2->execute([$_GET['id_post']]);
    $displayComment = $query2->fetchAll(PDO::FETCH_ASSOC);

    include('details.page.php');