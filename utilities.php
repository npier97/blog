<?php
    function saveArticle(){
        include('pdo.php');
        if(isset($_POST['submit'])){
            $pseudo = $_POST['pseudo'];
            $title = $_POST['title'];
            $category = $_POST['category'];
            $article = $_POST['article'];

            $add = 'INSERT INTO posts (title_post, content_post, id_user, id_category, date_post)
            VALUES (?, ?, ?, ?, NOW())';

            $addToDb = $bdd->prepare($add);
            $addToDb->execute([$title, $article, $pseudo, $category]);
        }
    }

    function saveComment(){
        include('pdo.php');
        if(isset($_POST['submitComment'])){
            $pseudo = $_POST['pseudo'];
            $comment = $_POST['comment'];
            $email = $_POST['email'];
            $postId = $_POST['postId'];

            $add = 'INSERT INTO comments (content_comment, pseudo_comment, email_comment, id_post, date_comment) 
            VALUES (?, ?, ?, ?, NOW())';

            $addToDb = $bdd->prepare($add);
            $addToDb->execute([$comment, $pseudo, $email, $postId]);
        }
    }

    function updateArticle(){
        include('pdo.php');
        if(isset($_POST['newTitle'])){
            $title = $_POST['newTitle'];
            $article = $_POST['newArticle'];
            $id = $_POST['postId'];

            $add = 'UPDATE posts 
            SET title_post = ?, content_post = ?
            WHERE id_post = ?';

            $addToDb = $bdd->prepare($add);
            $addToDb->execute([$title, $article, $id]);
        }
    }

    function delete(){
        include('pdo.php');
        $id = $_GET['id_post'];

        $delete = 'DELETE FROM `posts` 
        WHERE `id_post` = ?';
    
        $suppr = $bdd->prepare($delete);
        $suppr->execute([$id]);
    }

    function deleteComment(){
        include('pdo.php');
        $comment = $_GET['id_comment'];

        $delete = 'DELETE FROM `comments` 
        WHERE `id_comment` = ?';
    
        $suppr = $bdd->prepare($delete);
        $suppr->execute([$comment]);
    }

    function updateCategory(){
        include('pdo.php');
        if(isset($_POST['newCategory'])){
            $category = $_POST['newCategory'];
            $id = $_POST['categoryId'];

            $add = 'UPDATE categories 
            SET name_category = ? 
            WHERE id_category = ?';

            $addToDb = $bdd->prepare($add);
            $addToDb->execute([$category, $id]);
        }
    }

    function deleteCategory(){
        include('pdo.php');
        $category = $_GET['id_category'];

        $delete = 'DELETE FROM `categories` 
        WHERE `id_category` = ?';
    
        $suppr = $bdd->prepare($delete);
        $suppr->execute([$category]);
    }