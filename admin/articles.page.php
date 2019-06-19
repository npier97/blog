<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Blog - Administration des articles</title>
</head>
<body>
    <header>
        <nav>
        <a href="#">Mon compte</a>
        <a href="#">Live</a>
        <a href="../index.php">Accueil</a>
        <a href="../administration.php">Administration</a>
        </nav>
    </header>
    <main>
        <section class="section">
            <div class="container">

                <button class="btn"><a href="../write.php">Rediger un nouvel article</a></button>

                    <?php foreach($display as $key => $value):?>
                        <?php
                        $content = $value['content_post'];
                        $text = substr("$content", 0, 200);
                        ?>
                        <div class="divAdmin">
                            <a href='comments.php?id_post=<?= $value['id_post'];?>'><i class="fas fa-comment-alt"></i></a>
                            <a href='../edit.php?id_post=<?= $value['id_post'];?>'><i class="fas fa-pencil-alt"></i></a>
                            <a href='../remove.php?id_post=<?= $value['id_post'];?>'><i class="fas fa-times"></i></a>
                            <p class="category"><?=$value['name_category']?></p><br>
                            <h3><a href="../details.php?id_post=<?= $value['id_post'];?>"><?=$value['title_post']?></a></h3><br>
                            <br>
                            <p><?=$text?>...</p><br>
                            <p><?=$value['name_user']?></p><br>
                        </div>
                    <?php endforeach;?>

                </div>
            </section>
        </main>
    </body>
</html>