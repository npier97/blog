<?php
    include('../utilities.php');

    deleteComment();

    header('Location: comments.php?id_post=' . $_GET['id_post']);
    exit();