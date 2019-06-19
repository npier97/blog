<?php
    include('../pdo.php');
    
    $query = $bdd->prepare('SELECT 
    `id_post`, `title_post`, `content_post`,`name_user`, `date_post`,`name_category` 
    FROM `posts` 
    NATURAL JOIN `users` 
    NATURAL JOIN `categories` 
    ORDER BY `date_post` DESC
    ');
    $query->execute();

    $display = $query->fetchAll(PDO::FETCH_ASSOC);
    include('articles.page.php');