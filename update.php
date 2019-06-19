<?php

include('utilities.php');
    
updateArticle();

header('Location: details.php?id_post='.$_POST['postId']);
exit();