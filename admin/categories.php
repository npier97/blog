<?php
    include('../pdo.php');
    
    $query = $bdd->prepare('SELECT *
    FROM `categories` 
    ORDER BY `id_category`
    ');
    $query->execute();

    $displayCategory = $query->fetchAll(PDO::FETCH_ASSOC);

    include('categories.page.php');