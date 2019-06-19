<?php
    include('pdo.php');
    
    $query = $bdd->prepare('SELECT * 
    FROM `posts` 
    NATURAL JOIN `users` 
    NATURAL JOIN `categories`
    ORDER BY `date_post` DESC LIMIT 0,5
    ');
    $query->execute();

    $display = $query->fetchAll(PDO::FETCH_ASSOC);

    include('index.page.php');