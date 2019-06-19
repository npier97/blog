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

    include('edit.page.php');