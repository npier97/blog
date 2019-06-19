<?php

    try {
        $bdd = new PDO("mysql:host=localhost;dbname=blog;charset=utf8","root","");
    } 

    catch (PDOException $e) {
        echo("error").$e->getMessage();
    }