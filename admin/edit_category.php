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
    <title>Blog - Modifier la categorie</title>
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
        <?php
        include('../pdo.php');

        $query = $bdd->prepare('SELECT * 
        FROM `categories` 
        WHERE id_category = ?
        ');
        $query->execute([$_GET['id_category']]);
        $categoryData = $query->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <main>
            <section class="section">
                <div class="container">
                    <form action="update_category.php" method="post">
                        <fieldset>
                            <legend>Edition</legend>

                                <input type="hidden" name="categoryId" value="<?=$categoryData[0]['id_category']?>">

                                <div class="field">
                                    <label class="label">Categorie</label>
                                    <div class="control">
                                        <input type="text" name="newCategory" value="<?=$categoryData[0]['name_category']?>">
                                    </div>
                                </div>

                                <div class="field is-grouped">
                                    <div class="control">
                                        <input type="submit" name="updateCategory" value="Publier" class="button is-link">
                                        <button class="button is-link"><a href="categories.php">Annuler</a></button>
                                    </div>
                                </div>
                        </fieldset>
                    </form>
                </main>
    </body>
</html>