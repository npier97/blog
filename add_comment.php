<?php
    include('utilities.php');
    
    saveComment();

    header('Location: details.php?id_post='.$_POST['postId']);
    exit();