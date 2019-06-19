<?php
    include('pdo.php');

    $reponse = $query = $bdd->prepare('SELECT * 
    FROM `users`
    ');
    $reponse->execute();
    $userTable = $reponse->fetchAll(PDO::FETCH_ASSOC);
                                 
    
    $reponse = $query = $bdd->prepare('SELECT * 
    FROM `categories`
    ');
    $reponse->execute();
    $categoryTable = $reponse->fetchAll(PDO::FETCH_ASSOC);

    include('write.page.php');