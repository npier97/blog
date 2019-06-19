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
    <title>Blog - Administration des categories</title>
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

                    <ul>
                        <?php foreach($displayCategory as $key => $value):?>
                                <li>
                                    <?=$value['name_category']?>
                                    <a href='edit_category.php?id_category=<?= $value['id_category'];?>'><i class="fas fa-pencil-alt"></i></a>
                                    <a href='remove.category.php?id_category=<?= $value['id_category'];?>'><i class="fas fa-times"></i></a>
                                </li>
                        <?php endforeach;?>
                    </ul>

                    </div>
                </section>
        </main>
    </body>
</html>