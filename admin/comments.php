<?php
    include('../pdo.php');
    
    $query = $bdd->prepare('SELECT * 
    FROM `comments` AS c
    JOIN `users` AS u ON c.pseudo_comment = u.id_user
    WHERE c.id_post = ?
    ');
    $query->execute([$_GET['id_post']]);
    $displayComment = $query->fetchAll(PDO::FETCH_ASSOC);

    include('comments.page.php');